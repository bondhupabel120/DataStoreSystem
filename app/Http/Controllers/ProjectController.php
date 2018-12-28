<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProjectController extends Controller
{
    public function index(){
        return view('front.home.home');
    }

    public function category(){
        return view('front.category.category');
    }

    public function seeUser(){
        return view('admin.user.see-user',[
            'users' => DB::table('users')
                ->select('users.*')
                ->orderBy('users.id', 'desc')
                ->get()
        ]);
    }
}
