<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;


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

Route::get('/admin/home', [adminController::class, 'home']);
Route::get('/admin/member', [adminController::class, 'member']);
Route::get('/admin/member/tambah', [adminController::class, 'tambahMemberView']);
Route::get('/admin/member/edit/{id}', [adminController::class, 'editMemberView']);
Route::get('/admin/paket', [adminController::class, 'paket']);

/* API*/

Route::post('/admin/member/tambah', [adminController::class, 'tambahMember']);
Route::get('/admin/member/hapus/{id}', [adminController::class, 'hapusMember']);
Route::post('/admin/member/edit/{id}', [adminController::class, 'editMember']);
