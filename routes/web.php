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

// Route::get('/', function () {
//     return view('backend.dashboard');
// });
Route::get('/',function(){
	return view('frontend.user');
});
Route::get('bloggercontent',function(){
	return view('frontend.blogger')->name('blogger');
});
Route::get('video',function(){
	return view('frontend.video')->name('video');
});
Route::get('login',function(){
	return view('frontend.login');
});