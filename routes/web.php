<?php

use App\Http\Controllers\PengalamanKuliahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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
    return view('auth.login');
});

Auth::routes();

Route::resource('Mahasiswas', MahasiswaController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class,'dashboard'])->name('dashboard');
Route::get('/profile', [ProfileController::class,'profile']);
Route::get('/profile/{$name}', [ProfileController::class,'profile']);
Route::get('/pengalaman-kuliah', [PengalamanKuliahController::class,'pengalaman']);
Route::get('/search', [MahasiswaController::class, 'search'])->name('search');

// Route::controller(LayoutController::class)->group(function (){
//     Route::get('home', 'home');
//     Route::get('/layout/index', 'index');
// });

