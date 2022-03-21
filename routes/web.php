<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;

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

// normal routes
Route::view("/","welcome");

// dynamic route pass params
Route::get("/contact/{name}",function($name){
    return view("contact",["test"=>$name]);
});

// with the help of controller
Route::get("/about/{user}",[Test::class,'myFuncton']);
