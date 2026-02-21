<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// 1. الصفحة الرئيسية - لا تحتاج لتمرير أي متغيرات هنا
Route::get('/', function () {
    return view('welcome');
});

// 2. مسار المصادر للمنتجات (إذا كنت تستخدمه)
Route::resource('products', ProductController::class);

// 3. المسار الخاص بالفιλترة حسب المناسبة
// تأكد أن هذا المسار يذهب للـ Controller وليس لـ View مباشرة
Route::get('/shop/{occasion}', [ProductController::class, 'index'])->name('products.by_occasion');
