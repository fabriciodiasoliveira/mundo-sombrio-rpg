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
   //Class
   Route::get('/admin/class', [App\Http\Controllers\ClassPersonController::class, 'index'])->name('admin.class');
   Route::get('/admin/class/create/', [App\Http\Controllers\ClassPersonController::class, 'create'])->name('admin.class.create');
   Route::post('/admin/class', [App\Http\Controllers\ClassPersonController::class, 'store'])->name('admin.class.store');
   Route::delete('/admin/class/delete/{id}', [App\Http\Controllers\ClassPersonController::class, 'destroy'])->name('admin.class.destroy');
   Route::get('/admin/class/edit/{id}', [App\Http\Controllers\ClassPersonController::class, 'edit'])->name('admin.class.edit');
   Route::put('/admin/class/update/{id}', [App\Http\Controllers\ClassPersonController::class, 'update'])->name('admin.class.update');
   
   //Stereotype
   Route::get('/admin/stereotype', [App\Http\Controllers\StereotypeController::class, 'index'])->name('admin.stereotype');
   Route::get('/admin/stereotype/create/', [App\Http\Controllers\StereotypeController::class, 'create'])->name('admin.stereotype.create');
   Route::post('/admin/stereotype', [App\Http\Controllers\StereotypeController::class, 'store'])->name('admin.stereotype.store');
   Route::delete('/admin/stereotype/delete/{id}', [App\Http\Controllers\StereotypeController::class, 'destroy'])->name('admin.stereotype.destroy');
   Route::get('/admin/stereotype/edit/{id}', [App\Http\Controllers\StereotypeController::class, 'edit'])->name('admin.stereotype.edit');
   Route::put('/admin/stereotype/update/{id}', [App\Http\Controllers\StereotypeController::class, 'update'])->name('admin.stereotype.update');
   Route::get('/admin/stereotype/show/{id}', [App\Http\Controllers\StereotypeController::class, 'show'])->name('admin.stereotype.show');
});
