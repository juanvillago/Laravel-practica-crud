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

Route::get('/', function () {
    return view('welcome');

});

Route::get('category', [App\Http\Controllers\CategoryController::class, 'index']); 
Route::get('category/create', [App\Http\Controllers\CategoryController::class, 'create']); 
Route::post('category/create', [App\Http\Controllers\CategoryController::class, 'store']); 
Route::get('category/{id}/edit', [App\Http\Controllers\CategoryController::class,'edit']);
Route::put('category/{id}/edit', [App\Http\Controllers\CategoryController::class,'update']);
Route::delete('category/{id}/delete', [App\Http\Controllers\CategoryController::class,'destroy']);