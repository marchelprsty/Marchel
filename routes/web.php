<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Read;

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
});

Route::get('/create', 'Create@halaman_create');
Route::post('/read', 'Read@halaman_read');
Route::get('/update', 'Update@halaman_update');
Route::get('/delete', 'Delete@halaman_delete');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
