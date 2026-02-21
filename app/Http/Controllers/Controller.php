<?php

namespace App\Http\Controllers;

use App\Models\Product; // استدعاء موديل المنتج
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        // جلب كل المنتجات من قاعدة البيانات
        $products = Product::all();

        // إرسال البيانات لصفحة اسمها welcome (الموجودة في لارفل تلقائياً)
        return view('welcome', compact('products'));
    }
}