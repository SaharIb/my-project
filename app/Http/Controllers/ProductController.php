<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

// لا تقم باستدعاء BaseController هنا، بل استعمل Controller الموجود في مجلدك
class ProductController extends Controller
{
// عدلي الدالة لتصبح هكذا:
public function index($occasion = 'All Gifts') {
    $products = Product::all();

    // لازم نمرر المتغير occasion للـ view عشان يختفي اللون الأحمر
    return view('products.index', compact('products', 'occasion'));
}
public function show($id)
{
    $product = Product::findOrFail($id);

    return view('products.show', compact('product'));
}
public function wrapping($id) {
    $product = Product::findOrFail($id);
    return view('products.wrapping', compact('product'));
}

}


//     public function create()
//     {
//         return view('products.create');
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'name' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'price' => 'required|numeric|min:0',
//         ]);

//         Product::create($validated);

//         return redirect()->route('products.index')->with('success', 'Product created successfully.');
//     }

//     public function show(Product $product)
//     {
//         return view('products.show', compact('product'));
//     }

//     public function edit(Product $product)
//     {
//         return view('products.edit', compact('product'));
//     }

//     public function update(Request $request, Product $product)
//     {
//         $validated = $request->validate([
//             'name' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'price' => 'required|numeric|min:0',
//         ]);

//         $product->update($validated);

//         return redirect()->route('products.index')->with('success', 'Product updated successfully.');
//     }

//     public function destroy(Product $product)
//     {
//         $product->delete();

//         return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
//     }
// }
