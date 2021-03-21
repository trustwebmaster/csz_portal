<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Members;
use App\Order;
use App\StudentMember;
use App\User;
use Illuminate\Http\Request;
use App\Repositories\MembersRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Paynow\Http\ConnectionException;
use Paynow\Payments\HashMismatchException;
use Paynow\Payments\InvalidIntegrationException;
use Paynow\Payments\Paynow;
use RealRashid\SweetAlert\Facades\Alert;

class MembersController extends Controller
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

    protected $members;

    public function index()
    {
        return view('member.index');
    }

    public function profile()
    {
        $email = Auth::user()->email;
        $member = StudentMember::whereEmail($email)->first();
        return view('member.member', ['member' => $member]);
    }

    public function userProfile()
    {
        return view('member.profile');
    }

    public function membership()
    {
        return view('member.membership');
    }

    public function membershipRenewal()
    {
        $orders = Order::where('user_id' , Auth::user()->id)->get();
        return view('member.membership-renewal'  , ['orders' => $orders]);
    }

    public function cpdEvents()
    {
        return view('member.cpd-events');
    }

    public function cpdPoints()
    {
        return view('member.cpd-points');
    }


    public function payment(PaymentRequest $request){

            $order = Order::Create([
                'user_id' => Auth::user()->id,
                'price' => $request->amount,
                'email' => $request->email,
                'phone' => $request->number,
            ]);


//        $email = $order->email;
        $email = "h180376n@hit.ac.zw";
        $phone_number = $order->phone;
        $amount = floatval($order->price);

        $payment = $this->paynow->createPayment(
            $order->id,
            $email
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

            return view('paynow.member-payment', ['newTransaction' => $newTransaction , 'phone_number' => $phone_number]);

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

    public function member_payment(Request $request){
        $this->validate($request, [
            'transaction' => 'exists:orders,id'
        ]);

        // Find a transaction matching the given transaction id
        $transaction = Order::findOrFail($request->input('transaction'));

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
                return response()->json([
                    'status' => 'success',
                    'message' => 'Paid',
                    'url' =>  route('user.membership-renewal')
                ]);

            }

            else{
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

    public function editmember(Request $request)
    {

        if ($request->has('contact')) {
            $member = StudentMember::where('id', $request->id)
                ->Update([
                    "firstname" => $request->firstname,
                    "surname" => $request->lastname,
                    "number" => $request->phone_number,
                    "email" => $request->email,
                    "address" => $request->address
                ]);
            Alert::success('Contact Information', 'Successfully Updated member details');
            return back();
        } elseif ($request->has('hobbies')) {

            $member = StudentMember::where('id', $request->id)
                ->Update([
                    "current_year" => $request->current_year,
                    "school_name" => $request->school_name,
                    "interest_group" => $request->interest_group,
                    "notes" => $request->notes
                ]);
            Alert::success('Member Education', 'Successfully Updated member details');
            return back();
        } else {
            $member = StudentMember::where('id', $request->id)
                ->Update([
                    "chapter" => $request->chapter,
                ]);
            Alert::success('Member Chapter', 'Successfully Updated member details');
            return back();
        }
    }

    public function create()
    {
        //add a new member

        $data = [
            'members' => $this->members->listMembers(),
            'title' => 'Add a Member',
        ];

        return view('admin.memberForm', $data);
    }

    public function store(Request $request)
    {
        //save new Member
        $member = \App\Members::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'postcode' => $request->postcode,
            'DOB' => $request->DOB,
            'phone' => $request->phone,
            'subscription' => $request->subscription
        ]);

    }

    public function show(Members $members, Request $request)
    {
        //
        $member_id = str_after($request->path(), 'members/');

        $data = [
            'member' => $members::find($member_id),
        ];
        return view('admin.show', $data);
    }

    public function edit(Members $members, Request $request)
    {
        //get members id
        $member_id = str_after($request->path(), 'members/');
        $member_id = str_before($member_id, '/');

        $data = [
            'members' => $this->members->getMember($member_id),
            'isEditPage' => true, //boolean to show form values
            'title' => 'Edit Member',
        ];

        return view('admin.memberForm', $data);
    }

    public function update(Request $request, Members $members)
    {
        //
        $member_id = $request->id;

        $member = $this->members->getMember($member_id);

        $member->firstName = $request->firstName;
        $member->lastName = $request->lastName;
        $member->email = $request->email;
        $member->address1 = $request->address1;
        $member->address2 = $request->address2;
        $member->postcode = $request->postcode;
        $member->DOB = $request->DOB;
        $member->phone = $request->phone;
        $member->subscription = $request->subscription;
        $member->save();

        return redirect()->action('MembersController@index');

    }

    public function destroy(Members $members)
    {
        //
    }

    // reports index
    public function reportsIndex()
    {
        // code...
        return view('admin.reportsIndex');
    }

    // run reports
    public function viewReport(Request $request)
    {
        $data = array(
            'members' => $this->members->runReport($request->month, $request->year),
            'total' => $this->members->runReport($request->month, $request->year)->count(),
        );
        return view('admin.reports', $data);
    }
}
