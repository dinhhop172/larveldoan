<?php

use App\Http\Controllers\MyController;
use App\Http\Middleware\CheckAge;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
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



Route::get('post/{post}/comment/{comment}', function ($postId, $commentId) {
    return "post: {$postId} - comment: {$commentId}";
});
Route::get('user/{id}', function ($id = null) {
    return $id;
})->middleware('CheckAge', 'CheckName');

Route::get('show/{id}', 'Admin\MyController@show');

Route::get('tong/{a}/{b}', 'Admin\MyController@tong');

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', function(){
//         return view('admin.dashboard.index');
//     })->name('index');
//     Route::resource('products', 'ProductController');
//     Route::resource('customers', 'CustomerController');
//     Route::resource('orders', 'OrderController');
//     Route::resource('productbrands', 'ProductBrandController');
//     Route::resource('orderdetails', 'OrderDetailController');
//     // Route::resource('login', 'AccountController');
//     Route::resource('users', 'UserController', ['except' => ['show', 'create', 'store']]);
// });

Auth::routes();

// Ajax
Route::get('fetch-all-data', function () {
    header('Access-Control-Allow-Origin: *');

    // collection = [];
    $listVocabularies = Customer::all();
    dd($listVocabularies);


    // return response()->json($listVocabularies);
});

Route::get('/', 'FrontController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // Route::get('/', function(){
    //         return view('admin.dashboard.index');
    //     })->name('index');
    Route::resource('customers', 'CustomerController');
    Route::resource('orders', 'OrderController');
    Route::resource('orderdetails', 'OrderDetailController');
    Route::resource('products', 'ProductController');
    Route::resource('productbrands', 'ProductBrandController');
    Route::resource('users', 'UserController', ['except' => ['show', 'create', 'store']]);
    Route::get('/', 'DashboardController@index')->name('dashboards.index');
    Route::get('hello', 'CustomerController@hello');
});

Route::group(['middleware' => 'locale'], function () {
    //FrontEnd
    Route::resource('front', 'FrontController', ['except' => ['upadte', 'destroy', 'create', 'store']]);
    Route::get('brand/{id}', 'FrontController@brand')->name('brand');
    Route::get('contact', 'FrontController@contact')->name('contact')->middleware('auth');
    //Cart
    Route::post('/addToCart', 'CartController@addToCart')->name('addToCart');
    Route::get('/viewCart', 'CartController@index')->name('viewCart');
    Route::get('/checkout', 'CartController@index')->name('checkout');
    Route::get('/cart/deleteItem/{id}', 'CartController@deleteItem')->name('cart.delete');
    Route::get('/cart/update-quantity/{id}/{quantity}', 'CartController@updateQuantity')->name('cart.update-quantity');
    Route::post('dat-hang', 'CartController@postCheckout')->name('dathang');
    Route::get('update-all-quantity', 'CartController@updateAllQuantity')->name('cart.update-quantity-all');

    // Route::get('dangnhap', 'LoginController@getLogin')->name('home');
    // Route::post('dangnhap', 'LoginController@postLogin')->name('login');


    Route::get('test', function () {
        return view('layouts.master');
    })->name('haha');

    Route::get('cart-create', 'CartController@createForm');
    Route::post('action-cart-create', 'CartController@actionCartCreate')->name('action-create');

    //Route::get('user/{name?}', function ($name = null) {
    //    return $name;
    //});
    Route::get('hehe', 'CartController@hehe')->name('hehe');
    //Route::get('user/{name?}', function ($name = 'John') {
    //    return $name;
    //});


    Route::get('change-lang/{language}', 'FrontController@changeLang')->name('changeLang');
});
