<?php

use App\Http\Controllers\admin\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
//Route Category
Route::get('/category', [App\Http\Controllers\admin\CategoryController::class, 'index']);
Route::post('/category/store', [App\Http\Controllers\admin\CategoryController::class, 'store'])->name('store');

//Route Brand
Route::get('/brand', [App\Http\Controllers\admin\BrandController::class, 'index']);
Route::post('/brand/store', [App\Http\Controllers\admin\BrandController::class, 'store'])->name('storeBrand');