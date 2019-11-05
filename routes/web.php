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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/society','SocietyController@index')->name('societyIndex');
Route::get('/society/insert','SocietyController@insert')->name('societyInsert');
Route::get('/society/edit/{soc_id}','SocietyController@edit')->name('society.edit')->middleware('check.society');
Route::post('/society/create','SocietyController@create')->name('societyCreate');
Route::get('/society/select/{soc_id}','SocietyController@select')->name('societySelect');

Route::get('/member','MemberController@index')->name('member.index')->middleware('check.society');
Route::any('/member/add','MemberController@add')->name('member.add')->middleware('check.society');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
