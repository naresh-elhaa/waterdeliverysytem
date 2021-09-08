<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ModalController;

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

Route::get('/main', function () {
    return view('main.content');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// --------------------------------

Route::prefix('modal')->name('modal_')->group(function () {
    Route::get('/', [App\Http\Controllers\Web\ModalController::class, 'index'])->name('index');
    Route::get('/add', [App\Http\Controllers\Web\ModalController::class, 'create'])->name('add');
    Route::post('/store', [App\Http\Controllers\Web\ModalController::class, 'store'])->name('store'); 
    Route::get('/edit/{vehiclemodels}', [App\Http\Controllers\Web\ModalController::class, 'edit'])->name('edit');
    Route::post('/update/{vehiclemodels}', [App\Http\Controllers\Web\ModalController::class, 'update'])->name('update');
    Route::get('/status/{vehiclemodels}', [App\Http\Controllers\Web\ModalController::class, 'status'])->name('status');
    Route::get('/deletet/{vehiclemodels}', [App\Http\Controllers\Web\ModalController::class, 'delete'])->name('delete');

});