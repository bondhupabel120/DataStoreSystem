<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Mail;

class Visitor extends Model
{
    protected $fillable = ['username', 'email', 'password','password2'];

//    For Registration
    public static function saveVisitorInfo($request){
        $visitor = new Visitor();
        $visitor->username  = $request->username;
        $visitor->email     = $request->email;
        $visitor->password  = bcrypt($request->password);
        $visitor->password2 = bcrypt($request->password2);
        $visitor->save();

        Session::put('visitorId', $visitor->id);
        Session::put('visitorName', $visitor->username);

        $data = $visitor->toArray();
        Mail::send('front.mail.congratulation-mail', $data, function ($message) use ($data){
            $message->to($data['email']);
            $message->subject('Congratulation Mail');
        });
    }
}
