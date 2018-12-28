<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Session;

class SignUpController extends Controller
{
//    For Registration
    public function signUp(){
        return view('front.user.sign-up');
    }

    public function newSignUp(Request $request){
        Visitor::saveVisitorInfo($request);
        return redirect('/');
    }
//    End Registration

//    Logout
    public function visitorLogout(Request $request){
        Session::forget('visitorId');
        Session::forget('visitorName');

        return redirect('/');
    }
//    End logout

//    Login section
    public function signIn(){
        return view('front.user.sign-in');
    }

    public function newSignIn(Request $request){
        $visitor = Visitor::where('email', $request->email)->first();

        if ($visitor){
            if (password_verify($request->password, $visitor->password)) {
                Session::put('visitorId', $visitor->id);
                Session::put('visitorName', $visitor->username);

                return redirect('/');
            } else {
                return redirect('/sign-in')->with('message','Password Invalid !!');
            }
        }else{
            return redirect('/sign-in')->with('message','Email Address Invalid !!');
        }
    }
//    End login

    public function emailCheck($email){
        $visitor = Visitor::where('email', $email)->first();
        if ($visitor){
            return json_encode('<span class="text-danger">Email address already exist</span>');
        }else{
            return json_encode('Email address available');
        }
    }

}
