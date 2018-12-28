<?php

namespace App\Http\Controllers;

use App\DataStore;
use DB;
use Illuminate\Http\Request;

class DataStoreController extends Controller
{
    public function dataStore(){
        return view('front.data.profile-data');
    }

    public function newDataStore(Request $request){
        DataStore::saveDataInfo($request);

        return redirect('/data-store')->with('message', 'Upload successfully');
    }

//    public function showData(){
//        return view('front.data.show-data',[
//            'data_stores' => DataStore::all()
//        ]);
//    }

    public function showData(){

            $data_stores = DB::table('data_stores')
                ->join('visitors', 'data_stores.visitor_id', '=', 'visitors.id')
                ->select('data_stores.*', 'visitors.id')
                ->orderBy('data_stores.id', 'desc')
                ->get();
            return view('front.data.show-data',[
                'data_stores' => $data_stores
            ]);

    }


}
