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

Route::get('/about', function () {
    return view('clientes.about');
});

Route::get('/blog', function () {
    return view('clientes.blog');
});

Route::get('/contact', function () {
    return view('clientes.contact');
});


Route::get('/reservation', function () {
    return view('clientes.reservation');
});

Auth::routes(['register' => false]);
//Auth::routes();

Route::get('/', 'ProductController@display');
Route::get('/menu', 'ProductController@menu');
Route::get('/gallery', 'ProductController@gallery');
Route::post('contactar', 'EmailController@contact');

// The following routes belong to the administrator interfaces
Route::middleware(['auth'])->group(function () {

    // Product module routes
    Route::resource('/products', 'ProductController');
    Route::get('/products/edit/{id}', 'ProductController@edit');
    Route::post('/products/destroy/{id}', 'ProductController@destroy');

    // User module routes
    Route::resource('/users', 'UserController');
    Route::get('/users/edit/{id}', 'UserController@edit');
    Route::post('/users/destroy/{id}', 'UserController@destroy');
});
