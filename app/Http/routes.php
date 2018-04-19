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
    return view('welcome');
});


Route::resource('admin/suppliers', 'SuppliersController');

Route::resource('admin/projects', 'ProjectsController');

Route::resource('admin/contracts', 'ContractsController');

Route::resource('admin/payments', 'PaymentsController');


Route::get('/admin/gallery', function () {
    return view("admin.gallery");
});

Route::auth();

Route::get('/home', 'HomeController@index');
