<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GiftController;
// 1. الصفحة الرئيسية - لا تحتاج لتمرير أي متغيرات هنا
Route::get('/', function () {
    return view('welcome');
});

// 2. مسار المصادر للمنتجات (إذا كنت تستخدمه)
Route::resource('products', ProductController::class);

Route::get('/shop/{occasion}', [App\Http\Controllers\Controller::class, 'index'])->name('products.by_occasion');
// الرابط اللي بيناديه الزر عندك في الصفحة الرئيسية
Route::get('/products/category/{occasion}', [ProductController::class, 'index'])->name('products.by_occasion');
// الرابط العام لكل المنتجات (اختياري)
Route::get('/all-products', [ProductController::class, 'index'])->name('products.index');
// 1. صفحة عرض تفاصيل المنتج
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

// 2. صفحة التغليف المرتبطة بهذا المنتج
Route::get('/product/{id}/wrap', [App\Http\Controllers\ProductController::class, 'wrap'])->name('products.wrap');
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/wrap/{id}', function ($id) {
    return view('wrap', compact('id'));
});
