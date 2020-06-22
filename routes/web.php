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

Route::get('/about','PagesController@getAbout');
Route::get('/dashboard','PagesController@getDashboard');
Route::get('/newrequest','PagesController@getNewrequest');
Route::get('/dashboard','MessageController@getMessages');
Route::post('/newrequest/submit','MessageController@submit');
Route::get('/welcome','PagesController@getWelcome');
Route::get('/','PagesController@getlogin');
Route::post('/MessageController/checklogin','MessageController@submit');


Route::post('/checklogin', 'MainController@checklogin');
Route::get('/logout', 'MainController@logout');
Route::get('/dashboard/{id}','MessageController@deleteMessages')->name('dltmsg');

Route::get('/dashboard/show/{id}','MessageController@showmessage')->name('showmsg');




