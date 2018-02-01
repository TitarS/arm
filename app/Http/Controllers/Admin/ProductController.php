<?php

namespace App\Http\Controllers\Admin;

use App\Image;
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

    public function create() {
        //$categories = Menu::getAllMenus();
        $categories = Menu::getProductsMenu();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'ru.title' => 'required',
            'uk.title' => 'required',
            'en.title' => 'required',
            'image_main' => 'image|nullable'
        ]);

        $product = Product::add($request->all());
        $product->uploadImage('images/products/kitchens', $request->file('image_main'));
        $product->uploadAlbum('images/products/kitchens', $request->file('images'));
        $product->setCategory($request->get('menu_id'));
        $product->toggleStatus($request->get('status'));
        $product->addAttributes($request->get('attributes'));
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->remove('images/products/kitchens/');
        $product->removeAlbum('images/products/kitchens/');
        $product->removeProductAttributes();

        return redirect()->route('products.index');
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Menu::getProductsMenu();
        $currentCategory = $product->menu_id;

        return view('admin.products.edit', compact(
            'product',
            'categories',
            'currentCategory'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'ru.title' => 'required',
            'uk.title' => 'required',
            'en.title' => 'required',
            'image_main' => 'image|nullable'

        ]);

        $product = Product::find($id);
        $product->edit($request->all());
        $product->uploadImage('images/products/kitchens/', $request->file('image_main'));
        $product->uploadAlbum('images/products/kitchens/', $request->file('images'));
        $product->setCategory($request->menu_id);
        $product->toggleStatus($request->status);
        $product->editAttributes($request->get('attributes'));
        $product->save();

        return redirect()->route('products.index');
    }

    public function deleteImage($productID, $imageID){
        $image = Image::where([
            ['product_id', $productID],
            ['id', $imageID]
        ])->first();
        $image->remove('images/products/kitchens/');

        return redirect()->back();
    }

}
