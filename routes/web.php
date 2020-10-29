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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('producer-register', 'ProducerController@register')->name('register-producer.index');
Route::post('producer-register', 'ProducerController@registerSubmit')->name('register-producer.submit');

Route::get('/access-denied', function () {
    return view('access-denied');
})->name('access-denied');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Customer Routes
Route::prefix('producer')->group(function () {
    Route::get('/', 'ProducerController@index')->name('producer.index');
    Route::get('/view/{id}', 'ProducerController@view')->name('producer.view');
    Route::get('/items/{id}', 'ProducerController@items')->name('producer.items');
    Route::get('/follow/{id}', 'ProducerController@followProducer')->name('producer.follow');
});


// Producer Only Routes
Route::middleware(['auth', 'prevent-none-producers'])->group(function () {
    Route::prefix('producers')->group(function () {
        Route::prefix('stores')->group(function () {
           Route::get('/', 'Producer\StoreController@index')->name('producer.store.index');
            Route::get('/create', 'Producer\StoreController@create')->name('producer.store.create');
            Route::get('/store', 'Producer\StoreController@store')->name('producer.store.store');
            Route::get('/edit/{id}', 'Producer\StoreController@edit')->name('producer.store.edit');
            Route::get('/edit-submit/{id}', 'Producer\StoreController@editSubmit')->name('producer.store.edit-submit');
            Route::get('/delete/{id}', 'Producer\StoreController@delete')->name('producer.store.delete');
            Route::get('/items/{id}', 'Producer\StoreController@items')->name('producer.store.item');
        });

        Route::prefix('items')->group(function () {
            Route::get('/', 'Producer\ItemController@index')->name('producer.item.index');
            Route::get('/create', 'Producer\ItemController@create')->name('producer.item.create');
            Route::get('/store', 'Producer\ItemController@store')->name('producer.item.store');
            Route::get('/edit/{id}', 'Producer\ItemController@edit')->name('producer.item.edit');
            Route::get('/delete/{id}', 'Producer\ItemController@delete')->name('producer.item.delete');
            Route::get('/edit-submit/{id}', 'Producer\ItemController@editSubmit')->name('producer.item.edit-submit');

        });
    });
});

