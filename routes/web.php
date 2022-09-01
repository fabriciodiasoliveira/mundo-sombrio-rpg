<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Class
Route::get('/class', [App\Http\Controllers\ClassPersonController::class, 'index'])->name('class');
Route::get('/class/{i}', [App\Http\Controllers\ClassPersonController::class, 'show'])->name('class.show');
Route::get('/class/one/{i}', [App\Http\Controllers\ClassPersonController::class, 'show_one'])->name('class.show.one');
Auth::routes();


Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'], function() {
   Route::get('/admin/class', [App\Http\Controllers\ClassPersonController::class, 'index'])->name('admin.class');
});
