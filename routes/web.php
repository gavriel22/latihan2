<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/input', function () {
    return view('InputBuku'); 
});

Route::get('/read', [App\Http\Controllers\ControllerBuku::class, 'getAll']);
Route::post('/create', [App\Http\Controllers\ControllerBuku::class, 'addData']);
Route::get('/create', function() {
    return redirect('/input');
});

Route::get('/delete',[App\Http\Controllers\ControllerBuku::class, 'delete']);

Route::get('/update', [App\Http\Controllers\ControllerBuku::class, 'getById']);
Route::post('/edit', [App\Http\Controllers\ControllerBuku::class, 'updateData']);
Route::get('/edit', function() {
    return redirect('/read');
});
