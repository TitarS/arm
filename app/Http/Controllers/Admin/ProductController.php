<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        $products = Product::whereIn('menu_id', [5, 6])->get();
        return view('admin.products.index', compact('products'));
    }

    public function show($id) {
        $product = Product::find($id)->get();
        return view('admin.products.edit', compact('product'));
    }

    public function create() {
        return view('admin.products.create');
    }
}
