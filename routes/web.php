<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::group(['middleware' => ['guest']], function () {
        Route::prefix('login')->group(function () {
            Route::get('/', 'UserController@form')->name('login');
            Route::post('/', 'USerController@login')->name('login');
        });
    });
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'ArticleController@list')->name('article.list');
        Route::get('/store', 'ArticleController@form')->name('article.store');
        Route::post('/store', 'ArticleController@store')->name('article.store');
        Route::get('/{id}', 'ArticleController@view')->name('article.view');

    });
});
