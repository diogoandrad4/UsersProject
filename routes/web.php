<?php

Route::get('/', 'ControllerProject@index')->name('users.index');
Route::get('/create', 'ControllerProject@create')->name('users.create');
Route::post('users', 'ControllerProject@store')->name('users.store');
Route::get('users/{id}/edit', 'ControllerProject@edit')->name('users.edit');
Route::put('users/{id}', 'ControllerProject@update')->name('users.update');
Route::delete('users/{id}', 'ControllerProject@destroy')->name('users.destroy');
Route::get('users/{id}', 'ControllerProject@show')->name('users.show');
