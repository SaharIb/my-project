<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product; // لازم نستدعي الموديل
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // عرض كل المنتجات
// عدلي الدالة لتصبح هكذا
public function index($occasion = null) {
    $products = \App\Models\Product::all();
    return view('products.index', compact('products', 'occasion'));
}

    // عرض تفاصيل منتج واحد
    public function show($id)
    {
        $product = Product::findOrFail($id); // إذا مش موجود بيعطي 404
        return view('products.show', compact('product'));
    }
    
    // داخل الكلاس في ملف Controller.php أو ProductController.php
    public function filterByOccasion($occasion)
    {
        // حالياً رح نجيب كل المنتجات عشان الصفحة تفتح
        // لاحقاً بتقدري تفلتريهم بناءً على كلمة $occasion
        $products = Product::all();

        return view('products.index', compact('products', 'occasion'));
    }
public function giftLab($id = null)
{
    // جلب المنتج المراد تغليفه، أو أول منتج من القاعدة كعينة
    $product = \App\Models\Product::find($id) ?? \App\Models\Product::first();

    // نمرر المنتج للصفحة لتجنب أخطاء المتغيرات غير المعرفة
    return view('products.gift-lab', compact('product'));
}
}
