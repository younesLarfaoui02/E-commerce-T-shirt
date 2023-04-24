<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\admin\SubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Auth::routes();
Auth::routes();


// Admin routes;
Route::group(['prefix' => 'admin' ] ,function () {
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('produits',ProduitController::class);
    Route::resource('categories',CategoryController::class);
    Route::post('/delete-all-categories',[CategoryController::class,'delete_all'])->name('delete-all-categories');
    Route::resource('subcategories',SubCategoryController::class);
    Route::resource('colors',\App\Http\Controllers\ColorController::class);
    Route::resource('sizes',\App\Http\Controllers\SizeController::class);
    Route::resource('sections',\App\Http\Controllers\SectionController::class);
    Route::get('admin/sections/add-products',[\App\Http\Controllers\SectionController::class,'add_product_to_section'])->name('sections.add_product_to_section');
});

Route::get('/google/url',function (){
    return "ok";
});
// Frontend routes;
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/all', [App\Http\Controllers\frontend\ProductController::class, 'get_all_products'])->name('all.products');
Route::get('/category/{category_name}/', [App\Http\Controllers\frontend\ProductController::class, 'get_by_category'])
       ->name('category_produits');
Route::get('subcategories/{category_id}',[SubCategoryController::class,'get_sub_categories']);
Route::get('/category/{category_name}/{sub_category}',[App\Http\Controllers\frontend\ProductController::class, 'get_by_sub_category']
    )->name('sub_category_produits');



Route::get('/products/{product_id}',[App\Http\Controllers\frontend\ProductController::class, 'show'])->name('product_detail.show');

Route::get('/cart/{product}',[\App\Http\Controllers\CartController::class, 'store'])->name('cart.store');

Route::get('/cart/',[\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
