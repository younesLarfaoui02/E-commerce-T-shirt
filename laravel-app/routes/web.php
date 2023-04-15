<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\admin\SubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('front.indexPage');
    
});

Route::prefix('admin')->group(function () {
    Route::resource('produits',ProduitController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('subcategories',SubCategoryController::class);
});

Route::get('subcategories/{category_id}',[SubCategoryController::class,'get_sub_categories']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/all', [App\Http\Controllers\frontend\ProductController::class, 'get_all_products'])->name('all.products');

