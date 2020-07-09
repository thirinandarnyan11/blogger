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

//Route::middleware('auth')->group(function(){

Route::get('/home','frontend\FrontendController@index')->name('index');

// Route::get('/index/useraction','frontend\LiveSearchController@useraction')->name('index.useraction');
// Route::get('/index/useractionpost','frontend\LiveSearchController@useractionpost')->name('index.useractionpost');



Route::resource('roles','frontend\RoleController');
Route::get('videoshow','frontend\FrontendController@video_show')->name('video_show');

Route::get('/videoshow/action','frontend\LiveSearchController@action')->name('videoshow.action');

Route::get('savevideo','frontend\FrontendController@saved_video')->name('saved_video');
Route::get('savepost','frontend\FrontendController@saved_post')->name('saved_post');
/*});
*/

Route::get('backend','backend\BackendController@index')->name('backend');

	
// Route::middleware('role:user')->group(function(){

	Route::get('/index/useraction','frontend\LiveSearchController@useraction')->name('index.useraction');
	Route::resource('roles','frontend\RoleController');
	Route::get('videoshow','frontend\FrontendController@video_show')->name('video_show');
	Route::get('/videoshow/action','frontend\LiveSearchController@action')->name('videoshow.action');
	Route::get('savevideo','frontend\FrontendController@saved_video')->name('saved_video');
	Route::get('savepost','frontend\FrontendController@saved_post')->name('saved_post');
// });



// Route::middleware('role:admin')->group(function(){

	Route::get('backend','backend\BackendController@index')->name('backend');
	Route::resource('bloggerlist','backend\BloggerListController');
	Route::post('sendemail/send/{id}','backend\SendEmailController@send');
	Route::get('sendemail/denied/{id}','backend\DeniedMailController@denied')->name('denied');
	Route::resource('userlist','backend\UserListController');
	Route::resource('categories','backend\CategoryController');

// });

// Route::middleware('role:blogger')->group(function(){

	Route::get('blogger','frontend\FrontendController@blogger_content')->name('blogger');
	Route::get('userprofile','frontend\FrontendController@userprofile')->name('userprofile');

	Route::get('requestblogger/{id}','frontend\FrontendController@requestblogger')->name('requestblogger');

	Route::resource('post','frontend\BloggerController');
	
// });
	Route::resource('userpost','frontend\PostController');

	 Route::get('/like/{id}','frontend\PostController@like')->name('like');
	
	 //Route::post('/like','frontend\PostController@like')->name('like');

	
	Route::get('/post/show/{id}', 'frontend\PostController@show')->name('post.show');
	Route::post('/comment/store', 'frontend\CommentController@store')->name('comment.add');
	Route::post('/reply/store', 'frontend\CommentController@replyStore')->name('reply.add');


	Route::post('updateuserinfo/{id}','frontend\UpdateUserController@updateuserinfo')->name('updateuserinfo');
Route::post('updateuserprofile/{id}','frontend\UpdateUserController@updateuserprofile')->name('updateuseprofile');
Route::post('updateusercover/{id}','frontend\UpdateUserController@updateusercover')->name('updateusercover');

 Auth::routes();

 Route::get('/', 'HomeController@index')->name('home');

