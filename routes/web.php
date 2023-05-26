<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-all-session',function (){
    $session=session()->all();
    echo "<pre>";
    print_r($session);
    echo "</pre>";
}
    );

    Route::get('add-session',function (){
        session()->put("name","siddhartha");
        session()->put("last_name","shah");
        session()->flash("faculty","BIM");
        session()->put("last","mohicans");
        return redirect('get-all-session');

    });

    Route::get('destroy-session',function(){
        session()->forget('name');
        session()->forget('last_name');
        return redirect("get-all-session");
    });