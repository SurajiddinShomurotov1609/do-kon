<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmalController2;

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

Route::resource('object',\App\Http\Controllers\ObjectController::class);
Route::resource('product',\App\Http\Controllers\ProductController::class);
Route::resource('history',\App\Http\Controllers\HistoryController::class);

Route::get('/amal',[\App\Http\Controllers\AmalController::class,'amal'])->name('amal');

Route::get('/users',[\App\Http\Controllers\UserController::class,'user'])->name('user');

Route::post('/add',[\App\Http\Controllers\AmalController::class,'add'])->name('add');

Route::post('/olish',[\App\Http\Controllers\AmalController::class,'olish'])->name('olish');

Route::post('/kochirish',[\App\Http\Controllers\AmalController::class,'kochirish'])->name('kochirish');

Route::get('/userEdit/{id}',[\App\Http\Controllers\UserController::class,'userEdit'])->name('userEdit');

Route::get('/userUpdate/{id}',[\App\Http\Controllers\UserController::class,'userUpdate'])->name('userUpdate');

Route::get('/hisobot',[\App\Http\Controllers\AmalController::class,'hisobot'])->name('hisobot');

Route::get('/pdf',[\App\Http\Controllers\AmalController::class,'pdf'])->name('pdf');



Route::middleware(['auth'])->group(function (){
    Route::resource('modal',App\Http\Controllers\ModalCrudController::class);
}

);

Route::get('/', function () {
    return view('admin.master');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
