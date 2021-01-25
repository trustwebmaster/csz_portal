<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\StudentMember;
use App\User;
use Exception;

use Paynow\Payments\Paynow;
use Paynow\Http\ConnectionException;
use Paynow\Payments\HashMismatchException;
use Paynow\Payments\NotImplementedException;
use Paynow\Payments\InvalidIntegrationException;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class PaynowController extends Controller
{
    protected $paynow = null;


    public function __construct()
    {
        $this->paynow = new Paynow(
            env('PAYNOW_ID'),
            env('PAYNOW_SECRET'),
            url('/'),
            url('/')
        );
    }

    public function initialise(Request $request)
    {  
        $path = '/public/Student Documents';
        $filename1 = 'Student-'.\request('surname'). '-' .\request()->file('national_id')->getClientOriginalExtension();
        request()->file('national_id')->storeAs($path ,$filename1);
        $filename2 = 'Member'.\request('surname'). '-' .\request()->file('school_id')->getClientOriginalExtension();
        request()->file('school_id')->storeAs($path ,$filename2);
        $national_id = Storage::disk('local')->getAdapter()->applyPathPrefix($path.'/'.$filename1);
        $school_id = Storage::disk('local')->getAdapter()->applyPathPrefix($path.'/'.$filename2);


        $member = StudentMember::Create([
          'chapter'  => $request->chapter,
          'email' => session('membership')['email'],
          'interest_group' => $request->interest_group,
          'firstname' => $request->name,
          'surname' => $request->surname,
          'number' => $request->phonenumber,
          'password' =>Hash::make($request->password),
          'school_name' => $request->current_school,
          'date_of_birth' => $request->date_of_birth,
          'address' => $request->address,
          'current_year' => $request->current_year,
          'notes' => $request->notes,
          'school_id' => $school_id,
          'national_id' => $national_id,
        ]);

    
        $user = User::UpdateOrCreate([
            'name' => $member->firstname . $member->surname,
            'email' => $member->email,
            'password' =>$member->password,
        ]);

  
        $order =  Order::Create([
            'price' => $request->amount,
            'email' => session('membership')['email'],
            'phone' => $request->ecocash_number,
        ]);


        $email = $order->email;
        // $email = "h180376n@hit.ac.zw";
        $phone_number = $order->phone;
        $amount = floatval($order->price);

        $payment = $this->paynow->createPayment(
            $order->id,
            $email,
        );
        

        $payment->add(
            env('APP_NAME'),
            $amount
        );
        

        try {
            $response = $this->paynow->sendMobile(
                $payment,
                $phone_number,
                'ecocash'
            );

            if (!$response->success) {
                return response()->json([
                    '
              status' => 'error',
                    'message' => 'failed to iniatiate the transaction with paynow',
                    'why' => @$response->data()['error']
                ]);
            }

            $order->poll_url = $response->pollUrl();  
            $order->save();

            // Return the response
            $transaction = response([
                'status' => 'success',
                'message' => $response->instructions(),
                'transaction' => $order,
            ]);

            $newTransaction = json_decode($transaction->content(), true);

            // dd($newTransaction['transaction']['id']);
            
            return view('paynow.index', ['newTransaction' => $newTransaction , 'phone_number' => $phone_number]);
            
        } 
        
        catch (ConnectionException $e) {
            logger()->error("Failed to connect to Paynow\n" . $e->getTraceAsString());
        } catch (HashMismatchException $e) {
            logger()->error("Paynow hash validation failed\n" . $e->getTraceAsString());
        } catch (InvalidIntegrationException $e) {
            logger()->error("Paynow failed to validate our integration details\n" . $e->getTraceAsString());
        } catch (Exception $e) {
            logger()->error("General error thrown while sending transaction {$e->getMessage()}\n" . $e->getTraceAsString());
        }

        return response()->json([
            'status' => 'error',
            'message' => "Paynow encountered an error processing transaction"
        ]);
    }

    public function poll(Request $request)
    {  
        $this->validate($request, [
            'transaction' => 'exists:orders,id'
        ]);

        // Find a transaction matching the given transaction id
        $transaction = Order::findOrFail($request->input('transaction'));
        $member = StudentMember::where('email' ,  session('membership')['email'])->first();
        $user =  User::where('email' ,  session('membership')['email'])->first();
        

        try {
            // Try to poll the transaction
            // $status = $this->paynow->pollTransaction($transaction->poll_url);
            $status = $this->paynow->pollTransaction($transaction->poll_url);

            // Return transaction status
            // return response()->json([
            // 'status' => $status->paid() ? 'Paid' : 'Awaiting payment'
            // ]);
            if ($status->paid()) {
                $transaction->update(['ISpaid' => true]);
               Alert::success('Payment Successfully' , 'Thank You for making payment');
                return response()->json([
                    'status' => 'success',
                    'message' => 'Paid',
                    'url' =>  route('login')
                ]);

            }

            else{
                $member->delete();
                $user->delete();
            Alert::error('Error Occured' , 'An error occured whilst processing the transaction');    
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while polling transaction'
            ]);
           }
        }
        catch (Exception $e) {            
            logger()->error($e->getMessage() . "\t\t" . $e->getTraceAsString());
        }
    }
}
