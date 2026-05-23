<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

public function index()
{
    $products = Product::latest()->get();
    return view('admin.products.index', compact('products'));
}

public function create()
{
    return view('admin.products.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'image' => 'required|image',
    ]);

    $image = $request->file('image')->store('products', 'public');

    Product::create([
        'title' => $request->title,
        'image' => $image,
        'is_active' => $request->has('is_active'),
    ]);

return redirect()->route('products.index')->with('success', 'تم إضافة المنتج بنجاح');}
}
