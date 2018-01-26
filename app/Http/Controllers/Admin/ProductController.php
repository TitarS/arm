<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        $menus = Menu::find(2)->children->pluck('id')->all();
        $products = Product::whereIn('menu_id', $menus)->get();

        return view('admin.products.index', compact('products'));
    }

    public function edit($id) {
        $product = Product::find($id)->get();
        return view('admin.products.edit', compact('product'));
    }

    public function create() {
        //$categories = Menu::getAllMenus();
        $categories = Menu::getProductsMenu();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request) {

        //dd($request->get('attributes'));
        $product = Product::add($request->all());
        $product->uploadImage('images/products/kitchens', $request->file('image_main'));
        $product->setCategory($request->get('menu_id'));
        $product->toggleStatus($request->get('status'));
        $product->save();
        //$product->addAttribute($request->get('attributes'));
        $product->uploadAlbum('images/products/kitchens/', $request->images);


        return redirect()->back();
        //$product->addAttribute($request->get('attributes'));
    }
}
