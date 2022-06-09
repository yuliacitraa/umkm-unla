<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'detail'])->name('categories-detail');
Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::post('/detail/{id}', [App\Http\Controllers\DetailController::class, 'add'])->name('detail-add');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('cart-delete');
Route::post('/cart/{id}', [App\Http\Controllers\CheckoutController::class, 'process'])->name('checkout');
Route::get('/success', [App\Http\Controllers\CartController::class, 'success'])->name('success');

Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/products', [App\Http\Controllers\DashboardProductController::class, 'index'])->name('dashboard-products');
Route::get('/dashboard/products/add', [App\Http\Controllers\DashboardProductController::class, 'create'])->name('dashboard-products-create');
Route::get('/dashboard/products/{id}', [App\Http\Controllers\DashboardProductController::class, 'details'])->name('dashboard-products-details');

Route::get('/dashboard/transactions', [App\Http\Controllers\DashboardTransactionController::class, 'index'])->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id}', [App\Http\Controllers\DashboardTransactionController::class, 'details'])->name('dashboard-transactions-details');

Route::get('/dashboard/settings', [App\Http\Controllers\DashboardSettingController::class, 'store'])->name('dashboard-settings-store');
Route::get('/dashboard/account', [App\Http\Controllers\DashboardSettingController::class, 'account'])->name('dashboard-settings-account');

//     ->middleware(['auth', 'admin'])

Route::get('admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
Route::resource('admin/category', App\Http\Controllers\Admin\CategoryController::class);
Route::resource('admin/user', App\Http\Controllers\Admin\UserController::class);
Route::resource('admin/product', App\Http\Controllers\Admin\ProductController::class);
Route::resource('admin/product-gallery', App\Http\Controllers\Admin\ProductGalleryController::class);



Auth::routes();

