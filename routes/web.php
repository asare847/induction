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
Route::get('/inductions',function(){
    $inductees = App\Induction::all();
    return view('inductions.index',compact('inductees'));
});

Route::post('/inductions',function(){
    // validate
    App\Induction::create(request(['firstname','lastname']));
    //redirect
});
