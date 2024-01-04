<?php

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

Route::get('/', function () {
    return view('welcome');
});

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
