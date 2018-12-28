<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'mobile','message'];

    public static function saveContactInfo($request){
        $contact = new Contact();
        $contact->name     = $request->name;
        $contact->email    = $request->email;
        $contact->mobile   = $request->mobile;
        $contact->message  = $request->message;
        $contact->save();
    }
}
