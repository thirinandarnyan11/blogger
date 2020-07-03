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
// Route::get('/',function(){
// 	return view('frontend.user');
// });
Route::middleware('auth')->group(function(){
Route::get('/index','frontend\FrontendController@index')->name('index');
Route::get('videoshow','frontend\FrontendController@video_show')->name('video_show');
Route::get('savevideo','frontend\FrontendController@saved_video')->name('saved_video');
Route::get('savepost','frontend\FrontendController@saved_post')->name('saved_post');
});

Route::get('blogger','frontend\FrontendController@blogger_content')->name('blogger');


Route::resource('post','frontend\BloggerController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

