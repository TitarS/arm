<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index() {
        $menus = Menu::find(3)->children->pluck('id')->all();
        $products = Product::whereIn('menu_id', $menus)->get();

        return view('admin.galleries.index', compact('products'));
    }

    public function create() {
        $categories = Menu::getGalleriesMenu();

        return view('admin.galleries.create', compact('categories'));
    }

    public function store(Request $request) {
        $this->validate($request,[
            'ru.title' => 'required',
            'en.title' => 'required',
            'uk.title' => 'required',
        ]);

        $product = Product::add($request->all());
        $product->uploadImage('images/products/accessories', $request->file('image_main'));
        $product->setCategory($request->get('menu_id'));
        $product->toggleStatus($request->get('status'));
        $product->save();

        return redirect()->route('galleries.index');
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Menu::getGalleriesMenu();
        $currentCategory = $product->menu_id;

        return view('admin.galleries.edit', compact(
            'product',
            'categories',
            'currentCategory'
            ));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'ru.title' => 'required',
            'ua.title' => 'required',
            'en.title' => 'required'
        ]);
    }

}
