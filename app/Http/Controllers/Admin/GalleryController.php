<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index() {
        $menus = Menu::findOrFail(3)->children->pluck('id')->all();
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

    public function update(Request $request, $id) {
        $this->validate($request, [
            'ru.title' => 'required',
            'uk.title' => 'required',
            'en.title' => 'required'
        ]);

        $product = Product::where("id", $id)->first();
        $product->edit($request->all());
        $product->uploadImage('images/products/accessories/', $request->file('image_main'));
        $product->setCategory($request->menu_id);
        $product->toggleStatus($request->status);
        $product->save();

        return redirect()->route('galleries.index');
    }

    public function destroy($id) {
        Product::find($id)->remove('images/products/accessories/');

        return redirect()->route('galleries.index');
    }

}
