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

}

