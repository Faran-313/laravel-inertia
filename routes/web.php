<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {
//    return view('welcome');
//});\

/*Inertia*/
Route::get('/', [HomeController::class, 'index']);
Route::post('/posts', [HomeController::class, 'store'])->name('post.store');

/*if else Program*/
Route::get('marital-status', [StatusController::class, 'status']);
Route::post('marital-status/store', [StatusController::class, 'maritalStatusStore'])->name('marital-status.store');

/*Calculator with two input fields*/
Route::get('/calc', [CalculatorController::class, 'showCalculator']);
Route::post('/calc', [CalculatorController::class, 'saveCalculator'])->name('calc.save');

/*Palindrome Program*/
Route::get('/palindrome', [CalculatorController::class, 'palindrome']);

/*Crud Task*/
Route::get('/product', [ProductController::class, 'index'])->name('product.view');
Route::post('/create-product', [ProductController::class, 'save'])->name('product.save');
Route::get('/product-list', [ProductController::class, 'show'])->name('product.show');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::post('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
