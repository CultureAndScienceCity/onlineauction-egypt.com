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
Route::get('/caty', 'cat@index')->name('caty');
Route::get('/Addproduct', 'ProductController@index')->name('Addproduct');
Route::get('/Acution', 'ProductController@Auction')->name('Acution');
Route::get('/show/{id}', 'ProductController@show')->name('show');
Route::get('/auc/{id}', 'ProductController@auc')->name('auc');
Route::post('/addnewproduct', 'ProductController@store')->name('addnewproduct');
Route::post('/add_auc', 'AucController@add_auc')->name('add_auc');
Route::get('/deletes/{id}', 'ProductController@deletes')->name('deletes');
Route::get('/contactus', 'ProductController@contactus')->name('contactus');
Route::post('/contact', 'ProductController@contact')->name('contact');



Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/instruction', function () {
    return view('instruction');
});




