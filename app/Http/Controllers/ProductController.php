<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug) {
        $product = Product::whereTranslation('slug', $slug)->firstOrFail();

        if ($product->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('product.show', $product->translate()->slug);
        }

        return view('pages.product', compact('product'));
    }
}
