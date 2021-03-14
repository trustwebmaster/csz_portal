<?php

namespace App\Http\Controllers;

use App\Mail\VeryStepOne;
use App\StudentMember;
use Encore\Admin\Middleware\Session;
use Faker\Provider\ar_JO\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{    
    public function index()
    {
        
        return view('member.index');
    }

    public function member(Request $request)
    {
        session()->put('membership', [
            'email' => $request->email,
            'membership' => $request->membership
        ]);
        
        $user_info = session('membership');

        Mail::to($user_info['email'])->send(
            new VeryStepOne($user_info)
        );

        $email = $user_info['email'];
        
        return view('email.emaildisplay' ,['email' => $email]);

    }

    public function verify(){
       session()->put('verify' , [
           'verified' => 1
       ]);
       return redirect(route('student-registration'));
    }

    public function student(){
        if(session()->has('verify') ){

            if(session('membership')['membership'] == "STUDENT"){
                return view('member.verify');
            }

            elseif(session('membership')['membership'] == "GRADUATE"){
                return view('member.graduate');
            }

            elseif(session('membership')['membership'] == "PROFESSIONAL"){
                return view('member.proffesional');
            }
        
        }

       else{
         return redirect(route('email-verification'));
      }     
    }
   

    public function profile()
    {   
        
        $email = Auth::user()->email;

        // $test = StudentMember::CheapButBig()->get();

        $tests = StudentMember::all();
        

        // $test = $tests->get(100 , "Not Found");


        
        $tests->each(function($tudent){
             dd($tudent);
        });
    
        


        // $member = StudentMember::whereEmail($email)->first();
        // $user = $member->user()->email;
        // dd($user);

        // return view('member.member' , ['member' => $member]);
    }

    public function graduate()
    {
        return view('member.graduate');
    }

    public function admin()
    {
        return view('member.admin');
    }

    public function professional()
    {
        return view('member.proffesional');
    }

    public function membership()
    {
        return view('member.membership');
    }

    public function editmember(Request $request){
     
        if($request->has('contact')){
                $member = StudentMember::where('id' , $request->id)
                                        ->Update([
                                            "firstname" => $request->firstname,
                                            "surname" =>  $request->lastname,
                                            "number" => $request->phone_number,
                                            "email" => $request->email,
                                            "address" => $request->address
                                        ]);
                    Alert::success('Contact Information' ,'Successfully Updated member details');
                    return back();                                               
        }
        elseif($request->has('hobbies')){

                    $member = StudentMember::where('id' , $request->id)
                    ->Update([
                        "current_year" => $request->current_year,
                        "school_name" => $request->school_name,
                        "interest_group" => $request->interest_group,
                        "notes" => $request->notes
                    ]);
                    Alert::success('Member Education' ,'Successfully Updated member details');
                    return back();  
        }
        else{
                $member = StudentMember::where('id' , $request->id)
                ->Update([
                    "chapter" => $request->chapter,
                ]);
            Alert::success('Member Chapter' ,'Successfully Updated member details');
            return back(); 
            }
   }

}

