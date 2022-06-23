<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login','PassportController@login');
Route::post('register','PassportController@register');
    Route::get('categories','apiauc@index');//show catgoery
    Route::get('showproduct/{id}','apiauc@show');// show product
    Route::post('contact','apiauc@contact');// show product

Route::middleware('auth:api')->group( function () {
    Route::post('addproduct','apiauc@store'); // add product
    Route::get('inforramtionaus/{id}','apiauc@auc');// show user and auction
    Route::post('add_auc','apiauc@add_auc'); // add product
        Route::delete('delete{id}','apiauc@delete'); 
        // add product

    

});


