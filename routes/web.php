<?php

use App\Events\WebsocketDemoEvent;

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
    broadcast(new WebsocketDemoEvent('some data'));

    return view('welcome');
});

Route::get('/chats', 'ChatsController@index');

Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');

Route::get('/index', function () {
    return view('Admin_panel.index');
});
Route::get('/dash', function () {
    return view('Admin_panel.dash');
});
Route::get('/shm', function () {
    return view('Admin_panel.shm');
});
Route::get('/create', function () {
    return view('contact.create');
});
Route::resource('salary','SalaryController');
Route::resource('applydetials','ApplyController');

Route::match(['put', 'PATCH'], '/contact/update/{id}','ContactController@update');
Route::resource('contact',   'ContactController');

Auth::routes();
Route::resource('requirment1', 'RequirmentController');
Route::resource('requirment', 'RequirmentController');

Route::resource('check', 'RequirmentController');
Route::get('/markascompleted/{id}','RequirmentController@UpdateRequirmentascompleted');
Route::get('/markasnotcompleted/{id}','RequirmentController@UpdateRequirmentasnotcompleted');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myleave', 'HomeController@myleave')->name('myleave');
Route::get('/applyleave', 'HomeController@applyleave')->name('applyleave');
Route::post('/applyleave', 'HomeController@storeleave')->name('storeleave');
Route::get('/users', 'HomeController@users')->name('users');
Route::post('/users', 'HomeController@assignrole')->name('assignrole');
Route::delete('/deleteuser/{id}', 'HomeController@destroy')->name('deleteuser');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::resource('job', 'JobController');

Route::get('/allleave', 'HomeController@allleave')->name('allleave');
Route::get('/pending', 'HomeController@pending')->name('pending');
Route::get('/approvedleave', 'HomeController@approvedleave')->name('approvedleave');
Route::get('/rejectedleave', 'HomeController@rejectedleave')->name('rejectedleave');
Route::get('/reject', 'HomeController@reject')->name('reject');
Route::get('/approve', 'HomeController@approve')->name('approve');

Route::resource('posts', 'PostsController');
