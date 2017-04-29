<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();

//Route::post('login', 'Auth\LoginController@login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//
//Route::get('/', 'HomeController@index');
//
//Route::resource('/blog','BlogController');
//
//Route::get('/blog/create','BlogController@create')->middleware('auth');
//
//Route::get('/home', 'HomeController@index');

//Auth::routes();


// Authentication Routes...
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');

//$this->get('login', 'BlogController@aa');

//登录
//Route::get('login', 'Auth\LoginController@getLoing');
Route::post('login', 'Auth\LoginController@login');


Route::get('/',function(){
    return view('index');
});


//Route::group(['prefix'=>'api', 'middleware' => ['auth']], function () {

//->middleware('auth')
Route::get('/blog','BlogController@getBlog');
Route::get('/blog/detail/{id}','BlogController@getBlogDetail');

Route::post('/blog','BlogController@postBlog');


//});

//Route::get('/aaa',function (){
//    return redirect()->action('HomeController@index');
//});

//
//Route::get('/home', 'HomeController@index');
