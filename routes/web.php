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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product/{id}','productController@index')->name('product');
Route::get('/', 'productController@firstpage')->name('firstpage');
Route::post('/addcartproduct', 'cartController@cart');
Route::get('/cart/{id}','cartController@index');
Route::get('/removeproduct/{id}','cartController@remove')->name('user.removeproduct');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::post('/orderuser','OrderController@order')->name('user.order');
Route::get('/statusUser/{id}','statusOrderController@status')->name('user.status');
Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.fb');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::prefix('admin')->group(function(){
Route::get('/','AdminController@index')->name('admin.dashboard');
Route::get('/allowproduct','adminOrderController@productwait')->name('admin.allowproduct');
Route::get('/product', 'AdminController@addproduct')->name('admin.addproduct');
Route::post('/upload', 'UploadController@uploadSubmit')->name('admin.upload');;
Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/product/{id}/edit','AdminController@edit')->name('admin.editproduct');
Route::delete('/delete/{id}','AdminController@deleteproduct')->name('admin.deleteproduct');
Route::post('/delete/{id}','AdminController@deleteimg')->name('admin.img');
Route::patch('/editproduct/{id}','AdminController@editproduct')->name('admin.updateproduct');
Route::patch('/allow/{id}','adminOrderController@allowproduct')->name('admin.allow');
Route::patch('/dontallowproduct/{id}','adminOrderController@dontallowproduct')->name('admin.dontallowproduct');
});


