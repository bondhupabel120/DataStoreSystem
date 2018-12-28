<?php

Route::get('/',[
   'uses' => 'ProjectController@index',
   'as'   => '/'
]);

//Registration
Route::get('/sign-up',[
   'uses' => 'SignUpController@signUp',
   'as'   => 'sign-up'
]);

Route::post('/new-sign-up',[
   'uses' => 'SignUpController@newSignUp',
   'as'   => 'new-sign-up'
]);

Route::get('/email-check/{email}',[
    'uses' => 'SignUpController@emailCheck',
    'as'   => 'email-check'
]);

//Logout
Route::post('/visitor-logout',[
   'uses' => 'SignUpController@visitorLogout',
   'as'   => 'visitor-logout'
]);
//Login
Route::get('/sign-in',[
   'uses' => 'SignUpController@signIn',
   'as'   => 'sign-in'
]);

Route::post('/new-sign-in',[
   'uses' => 'SignUpController@newSignIn',
   'as'   => 'new-sign-in'
]);

//About
Route::get('/about',[
   'uses' => 'AboutController@about',
   'as'   => 'about'
]);

//Category
Route::get('/category',[
    'uses' => 'ProjectController@category',
    'as'   => 'category'
]);

//Data Store
Route::group(['middleware' => 'pervez'], function (){
    Route::get('/data-store',[
        'uses' => 'DataStoreController@dataStore',
        'as'   => 'data-store'
    ]);

    Route::post('/new-data-store',[
        'uses' => 'DataStoreController@newDataStore',
        'as'   => 'new-data-store'
    ]);

    Route::get('/show-data',[
        'uses' => 'DataStoreController@showData',
        'as'   => 'show-data'
    ]);
});





//Contact
Route::get('/contact',[
    'uses' => 'ContactController@contact',
    'as'   => 'contact'
]);

Route::post('/contact-info',[
    'uses' => 'ContactController@contactInfo',
    'as'   => 'contact-info'
]);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'pabel'], function (){

    Route::get('/see-user',[
        'uses' => 'ProjectController@seeUser',
        'as'   => 'see-user'
    ]);

    Route::get('/see-contact',[
        'uses' => 'ContactController@seeContact',
        'as'   => 'see-contact'
    ]);

});

