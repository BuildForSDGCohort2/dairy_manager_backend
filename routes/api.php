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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){

    Route::group(['prefix' => 'auth'], function () {
//    Unprotected routes
        Route::post('login', 'Api\Auth\AuthController@login');
        Route::post('register', 'Api\Auth\AuthController@register');

        Route::middleware('auth:api')->group(function () {
            // our routes to be protected will go in here
            Route::post('logout', 'Api\Auth\AuthController@logout');
        });
    });
});
