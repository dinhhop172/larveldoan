<?php

use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\ProductController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function() {
    Route::get('brand', 'BrandController@index')->name('apiBrand');
    Route::get('brand/{id}', 'BrandController@show')->where('id', '[0-9]+');
    Route::get('brand/search', 'BrandController@search');
    Route::get('brand/get', 'BrandController@get');
    Route::post('brand/create', 'BrandController@create');

    Route::get('product', 'ProductController@index');
    Route::get('product/{id}', 'ProductController@show')->where('id', '[0-9]+');
    Route::get('product/search', 'ProductController@search');
});
