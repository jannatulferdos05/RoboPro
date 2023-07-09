<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/robotics',function (){
    return view('demo');
});
Route::any('/programming',function (){
    return view('programming');
});
Route::any('/home',function (){
    return view('welcome');
});
Route::any('/about',function (){
    return view('about');
});
