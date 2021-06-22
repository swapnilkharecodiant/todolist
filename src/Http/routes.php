<?php
use Illuminate\Support\Facades\Route;

Route::get('/task-create', 'TodolistController@create')->name('task.create');
Route::post('/task-store', 'TodolistController@store')->name('task.store');
Route::get('/task/{id}/edit', 'TodolistController@edit')->name('task.edit');
Route::post('/task-update', 'TodolistController@update')->name('task.update');
Route::post('/task-destroy', 'TodolistController@destroy')->name('task.destroy');