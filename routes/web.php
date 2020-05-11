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

Route::get('/', [
'uses' => 'ProductController@getIndex',
'as' => 'product.index'
]);

Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);


Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout', [
    'uses' => 'productController@postCheckout',
    ' as' => 'checkout'
]);



Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
]);

Route::get('/signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');




Route::get('/profile', function () {
    return view('profile');
});
