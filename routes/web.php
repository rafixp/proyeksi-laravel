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
Route::get('/admin/paket/tambah', [adminController::class, 'tambahPaketView']);
Route::get('/admin/paket/edit{id}', [adminController::class, 'paket']);
Route::get('/admin/user', [adminController::class, 'user']);
Route::get('/admin/user/tambah', [adminController::class, 'tambahUserView']);
Route::get('/admin/user/edit/{id}', [adminController::class, 'editUserView']);
Route::get('/admin/paket/edit/{id}', [adminController::class, 'editPaketView']);
Route::get('/admin/transaksi', [adminController::class, 'transaksiView']);
Route::get('/admin/transaksi/tambah', [adminController::class, 'tambahTransaksiView']);


/* API*/

Route::post('/admin/member/tambah', [adminController::class, 'tambahMember']);
Route::get('/admin/member/hapus/{id}', [adminController::class, 'hapusMember']);
Route::post('/admin/member/edit/{id}', [adminController::class, 'editMember']);
Route::post('/admin/user/tambah', [adminController::class, 'tambahUser']);
Route::get('/admin/user/hapus/{id}', [adminController::class, 'hapusUser']);
Route::post('/admin/user/edit/{id}', [adminController::class, 'editUser']);
Route::post('/admin/paket/tambah', [adminController::class, 'tambahPaket']);
Route::post('/admin/paket/edit/{id}', [adminController::class, 'editPaket']);
Route::post('/admin/transaksi/tambah', [adminController::class, 'transaksiBaru']);

