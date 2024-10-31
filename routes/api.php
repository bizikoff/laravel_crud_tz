<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'users', 'controller' => UserController::class], function () {
    Route::get('/', 'index')->name('users.index');
    Route::post('/', 'store')->name('users.store');
    Route::patch('/{user}', 'update')->name('users.update');
    Route::delete('/{user}', 'destroy')->name('users.destroy');
});
