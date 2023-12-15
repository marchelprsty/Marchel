<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Read;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Create;
use App\Http\Controllers\Update;
use App\Http\Controllers\Delete;
use App\Http\Controllers\GuestbookController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/read', [GuestbookController::class, 'read'])->name('read');
Route::get('/', [GuestbookController::class, 'create']);
Route::post('/store', [GuestbookController::class, 'store']);
Route::get('/edit/{id}', [GuestbookController::class, 'edit']);
Route::put('/update/{id}', [GuestbookController::class, 'update']);
Route::get('/destroy/{id}', [GuestbookController::class, 'destroy']);




// Route::get('/', 'Create@halaman_create');
// Route::get('/read', 'Read@halaman_read');
// Route::get('/update', 'Update@halaman_update');
// Route::get('/delete', 'Delete@halaman_delete');

// Route::get('/', [Create::class, 'create'])->name('create');
// Route::get('/read', [Read::class, 'read'])->name('read');
// Route::get('/update', [Update::class, 'update'])->name('update');
// Route::get('/delete', [Delete::class, 'delete'])->name('delete');
// Route::post('/read', [Create::class, 'store'])->name('guestbooks.store');

// Route::get('/read/cari','Read@cari');
// Route::get('/path', 'Read@cari')->name('read');
// Route::get('/create/update', 'Create@halaman_update');

// Route::get('/', [MahasiswaController::class, 'read'])->name('mahasiswa.read');
// Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
// Route::get('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');