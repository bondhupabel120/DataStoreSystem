<?php

namespace App\Http\Controllers;

use App\Contact;
use DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('front.contact.contact');
    }

    public function contactInfo(Request $request){
        Contact::saveContactInfo($request);
        return redirect('/contact')->with('message', 'Sent Successfully');
    }

    public function seeContact(){
        return view('admin.contact.see-contact',[
            'contacts' => DB::table('contacts')
                ->select('contacts.*')
                ->orderBy('contacts.id', 'desc')
                ->get()
        ]);
    }
}
