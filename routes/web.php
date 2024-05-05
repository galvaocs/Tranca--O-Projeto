<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::prefix('admin')->group(function (){
    Route::middleware(['auth'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    }); 
    Route::resource('items', 'ItemController');
});