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
<<<<<<< HEAD
Route::middleware('auth')->group(function(){

=======
// Route::middleware('role:user')->group(function(){
>>>>>>> 3f75847b5074b4ebccf2fed565b6e3e874eccd94
Route::get('/index','frontend\FrontendController@index')->name('index');

Route::resource('roles','frontend\RoleController');
Route::get('videoshow','frontend\FrontendController@video_show')->name('video_show');

Route::get('/videoshow/action','frontend\LiveSearchController@action')->name('videoshow.action');

Route::get('savevideo','frontend\FrontendController@saved_video')->name('saved_video');
Route::get('savepost','frontend\FrontendController@saved_post')->name('saved_post');
/*});*/

Route::get('backend','backend\BackendController@index')->name('backend');

Route::resource('bloggerlist','backend\BloggerListController');

Route::post('/sendemail/send','backend\SendEmailController@send');

Route::resource('categories','backend\CategoryController');

Route::get('blogger','frontend\FrontendController@blogger_content')->name('blogger');


Route::resource('post','frontend\BloggerController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

