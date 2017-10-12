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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'FrontController@index');


Route::get('admin', function(){
  return redirect('/admin/dashboard');
});

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
  AdvancedRoute::controller('dashboard', 'Admin\AdminController');
  AdvancedRoute::controller('stuff', 'Admin\StuffController');
  //Route::resource('leads', 'Admin\LeadsController');
  Route::resource('students', 'Admin\StudentsController');
  Route::resource('users', 'Admin\UsersController');
  Route::get('users/remove/{id}', 'Admin\UsersController@remove');
  Route::get('users/restore/{id}', 'Admin\UsersController@restore');
});

// Route::group(['prefix' => '/', 'middleware' => []], function () {
//     AdvancedRoute::controller('/auth', 'AuthController');
//     AdvancedRoute::controller('/cms', 'CmsController');
//     AdvancedRoute::controller('/shop', 'ShopController');
//     Route::any('/', 'WebsiteController@anyIndex');
// });

Route::get('404', function () {
    return view('error.404');
});

Route::get('500', function () {
    return view('error.500');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/register', 'Auth\RegisterController@index')->name('register');


Route::get('fire', function () {
    // this fires the event
    event(new App\Events\EventName());
    return "event fired";
});

Route::get('test', function () {
    // this checks for the event
    return view('test');
});
