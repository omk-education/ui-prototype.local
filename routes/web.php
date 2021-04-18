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

// Страница авторизации
Route::view('/', 'login')->name('login');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Администратор
    Route::view('/', 'admin.index')->name('index');
    // Модуль студенты
    Route::group(['prefix' => 'students', 'as' => 'students.'], function () {
        Route::view('/', 'admin.students.index')->name('index');
        Route::view('/create', 'admin.students.create')->name('create');
        Route::view('/edit', 'admin.students.edit')->name('edit');
        Route::view('/show', 'admin.students.show')->name('show');
    });
});
