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


// Route::middleware('role:user')->group(function(){

Route::get('/index','frontend\FrontendController@index')->name('index');
Route::get('/index/useraction','frontend\LiveSearchController@useraction')->name('index.useraction');
Route::get('/index/useractionpost','frontend\LiveSearchController@useractionpost')->name('index.useractionpost');



Route::resource('roles','frontend\RoleController');
Route::get('videoshow','frontend\FrontendController@video_show')->name('video_show');

Route::get('/videoshow/action','frontend\LiveSearchController@action')->name('videoshow.action');

Route::get('savevideo','frontend\FrontendController@saved_video')->name('saved_video');
Route::get('savepost','frontend\FrontendController@saved_post')->name('saved_post');
/*});
*/
});
Route::get('backend','backend\BackendController@index')->name('backend');

Route::resource('bloggerlist','backend\BloggerListController');

Route::post('/sendemail/send/{id}','backend\SendEmailController@send');

Route::resource('categories','backend\CategoryController');

Route::get('blogger','frontend\FrontendController@blogger_content')->name('blogger');


Route::resource('post','frontend\BloggerController');


Route::resource('userpost','frontend\PostController');
Route::get('/post/show/{id}', 'frontend\PostController@show')->name('post.show');

Route::post('/comment/store', 'frontend\CommentController@store')->name('comment.add');
Route::post('/reply/store', 'frontend\CommentController@replyStore')->name('reply.add');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

