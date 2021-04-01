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
    'uses' => 'App\Http\Controllers\ProductController@getIndex',
    'as' => 'product.index'
]);
//session
Route::get('/add-to-cart/{id}',[
    'uses' => 'App\Http\Controllers\ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);
//reduce item in shppoing cart
Route::get('/reduce/{id}',[
    'uses' => 'App\Http\Controllers\ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);
//increase item in shppoing cart
Route::get('/increase/{id}',[
    'uses' => 'App\Http\Controllers\ProductController@getIncreaseByOne',
    'as' => 'product.increaseByOne'
]);
//remove item in shppoing cart
Route::get('/remove/{id}',[
    'uses' => 'App\Http\Controllers\ProductController@getRemoveItem',
    'as' => 'product.remove'
]);
///shopping cart
Route::get('/shopping-cart',[
    'uses' => 'App\Http\Controllers\ProductController@getCart',
    'as' => 'product.shoppingCart'
]);
//checkout
Route::get('/checkout',[
    'uses' => 'App\Http\Controllers\ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
Route::post('/checkout',[
    'uses' => 'App\Http\Controllers\ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
//payondelivery
Route::get('/order_confirmation2',[
    'uses' => 'App\Http\Controllers\ProductController@getPayondelivery',
    'as' => 'payondelivery',
    'middleware' => 'auth'
]);
Route::post('/order_confirmation2', [
    'uses' => 'App\Http\Controllers\ProductController@postPayondelivery',
    'as' => 'payondelivery',
    'middleware' => 'auth'
]); 

//route group
Route::group(['prefix'=> 'user'],function(){
    Route::group(['middleware'=> 'guest'],function(){
        //sign Up
        Route::get('/signup', [
            'uses' =>'App\Http\Controllers\UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup',[
            'uses' =>'App\Http\Controllers\UserController@postSignup',
            'as' => 'user.signup'
        ]);
        //sign In
        Route::get('/signin', [
            'uses' =>'App\Http\Controllers\UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin',[
            'uses' =>'App\Http\Controllers\UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });
    
    Route::group(['middleware'=>'auth'],function(){
        //user profile
        Route::get('/profile',[
            'uses' =>'App\Http\Controllers\UserController@getProfile',
            'as' => 'user.profile'
        ]);

        //logout
        Route::get('/logout',[
            'uses' =>'App\Http\Controllers\UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });

    Route::post('auth','App\Http\Controllers\Web\AuthController@authenticate')->name('auth.login');
    

});


Route::group(['prefix'=>'admin','middlware'=>'admin'],function(){

    Route::get('dashboard',function(){
        return "this is the admin dash";
    })->name('admin.dash');
});