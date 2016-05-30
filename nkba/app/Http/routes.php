<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
	Notify::success('مرحبا','تسجيل الدخول');
	return view('welcome');
});

Route::auth();

Route::resource('/home', 'HomeController');

Route::resource('/engineer', 'EngineerController');
//Route::put('/home/id', 'HomeController@update');

Route::resource('/users', 'UserController');

Route::resource('/fin', 'FainancesController');

Route::resource('/member-aditions', 'MemberAditionsController');

Route::resource('/task', 'TasksController');

Route::resource('/complain', 'ComplaintssController');



Route::resource('transfer','TransferController');

Route::resource('/create','TransferController@create');

//Admin routes
Route::resource('admin','AdminController');
Route::resource('admin-engineer','Admin\Engineers\AEngineersController');
