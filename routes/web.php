<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RebookController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('booking', [HomeController::class, 'booking'])->name('booking');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('cekLogin', [LoginController::class, 'authenticate'])->name('cekLogin');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::resource('listRuangan', RoomController::class);
Route::resource('listPenggunaAdministrasi', UsersController::class);
Route::resource('RebookRuangan', RebookController::class);

// Hak akses dapat digunakan jika sudah login
// Route::group(['middleware' => 'auth'], function() {

// });

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });
