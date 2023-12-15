<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Product', 'middleware' => 'jwt.auth'], function () {

    Route::get('/products', 'IndexController')->name('product.index');
    Route::group(['middleware' => 'admin'],function (){
        Route::post('/products/create', 'CreateController')->name('product.create');
        Route::patch('/products/{product}', 'UpdateController')->name('product.update');
        Route::delete('/products/{product}', 'DeleteController')->name('product.delete');
    });

});
Route::group(['namespace' => 'App\Http\Controllers\Category', 'middleware' => 'jwt.auth'], function () {

    Route::get('/categories', 'IndexController')->name('category.index');
    Route::group(['middleware' => 'admin'],function () {
        Route::post('/categories/create', 'CreateController')->name('category.create');
        Route::patch('/categories/{category}', 'UpdateController')->name('category.update');
        Route::delete('/categories/{category}', 'DeleteController')->name('category.delete');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Basket', 'middleware' => 'jwt.auth'], function () {

    Route::get('/basket', 'IndexController')->name('basket.index');
    Route::post('/basket/add', 'CreateController')->name('basket.create');
    Route::patch('/basket/{basket}', 'UpdateController')->name('basket.update');
    Route::delete('/basket/{basket}', 'DeleteController')->name('basket.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Order', 'middleware' => 'jwt.auth'], function () {

    Route::get('/orders', 'IndexController')->name('order.index');
    Route::post('/orders/apply', 'CreateController')->name('order.create');

});
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
'namespace' => 'App\Http\Controllers'
], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('registration', 'AuthController@registration');

});
