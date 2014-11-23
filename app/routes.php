<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/prijava',      array(  'as' => 'prijava',    'uses' =>'UserController@prijavaView'));

// Post routes
Route::post('/prijava',     array(  'as' => 'prijava', 'uses' =>'UserController@prijavaData'));



// Prijavljeni korisnici samo
Route::group(array('before' =>'auth'), function(){
    // Home controller
    Route::get('/',             array(  'as' => 'pocetna',    'uses' =>'HomeController@pocetna'));
    Route::get('/ispiti',       array(  'as' => 'ispiti',     'uses' =>'HomeController@ispiti'));
    Route::get('/finansije',    array(  'as' => 'finansije',  'uses' =>'HomeController@finansije'));
    Route::get('/dokumenta',    array(  'as' => 'dokumenta',  'uses' =>'HomeController@dokumenta'));
    Route::get('/pregled',      array(  'as' => 'pregled',    'uses' =>'HomeController@pregled'));
    Route::get('/kalendar',     array(  'as' => 'kalendar',   'uses' =>'HomeController@kalendar'));
    // User controller
    Route::get('/odjava',       array(  'as' => 'odjava',     'uses' =>'UserController@odjava'));
});



