<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', [App\Http\Controllers\ControllerBukuService::class, 'testAPI']);
Route::get('/getAll', [App\Http\Controllers\ControllerBukuService::class, 'getAll']);
Route::post('/add', [App\Http\Controllers\ControllerBukuService::class, 'addData']);
Route::delete('/delete/{id}', [App\Http\Controllers\ControllerBukuService::class, 'delete']);
Route::post('/getbyid',[App\Http\Controllers\ControllerBukuService::class, 'getById']);
Route::put('/update',[App\Http\Controllers\ControllerBukuService::class, 'update']);
