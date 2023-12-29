<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\validator;



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
    return view('auth.login');


});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard'); 
    

//Route Pegawai
Route::get('/pegawais',[PegawaiController::class, 'index'])->name('pegawais.index');
Route::get('/pegawais/create', [PegawaiController::class, 'create'])->name('pegawais.create');
Route::post('/pegawais', [PegawaiController::class, 'store'])->name('pegawais.store');
Route::get('/pegawais/{pegawai}', [PegawaiController::class, 'show'])->name('pegawais.show');
Route::get('/pegawais/{pegawai}/edit', [PegawaiController::class, 'edit'])->name('pegawais.edit');
Route::put('/pegawais/{pegawai}', [PegawaiController::class, 'update'])->name('pegawais.update');
Route::delete('/pegawais/{pegawai}', [PegawaiController::class, 'destroy'])->name('pegawais.destroy');

//Route Barang
Route::get('/barangs',[BarangController::class, 'index'])->name('barangs.index');
Route::get('/barangs/create', [BarangController::class, 'create'])->name('barangs.create');
Route::post('/barangs', [BarangController::class, 'store'])->name('barangs.store');
Route::get('/barangs/{barang}', [BarangController::class, 'show'])->name('barangs.show');
Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
Route::put('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');
Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');

//Route Customer
Route::get('/customers',[CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

//Route User
Route::get('/users', [HomeController::class, 'index'])->name('users.index');
Route::get('/create', [HomeController::class, 'create'])->name('users.create');
Route::post('/store', [HomeController::class, 'store'])->name('users.store');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('users.edit');
Route::put('/update/{id}', [HomeController::class, 'update'])->name('users.update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('users.delete');

});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register_proses', [LoginController::class, 'register_proses'])->name('register_proses');