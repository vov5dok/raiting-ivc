<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::group(['namespace' => 'App\Http\Controllers\User', 'prefix' => 'user'], function() {
    Route::get('/', 'IndexController')->name('user.index');
    Route::get('/create', 'CreateController')->name('user.create');
    Route::post('/store', 'StoreController')->name('user.store');
    Route::delete('/{user}', 'DeleteController')->name('user.delete');
});

