<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class CategoryController extends Controller
{
    public function ourWorks() {
        $currentMenu = Menu::where('slug', 'our-works')->firstOrFail();
        $subMenus = $currentMenu->children()->get();

        return view('pages.category', compact('currentMenu', 'subMenus'));
    }

    public function ourWorksList($slug) {
        $currentMenu = Menu::where('slug', $slug)->firstOrFail();
        $products = $currentMenu->products()->where('status', 1)->paginate(7);

        return view('pages.category_list', compact('currentMenu', 'products'));
    }

    public function accessories() {
        $currentMenu = Menu::where('slug', 'accessories')->firstOrFail();
        $subMenus = $currentMenu->children()->where('status', 1)->get();

        return view('pages.gallery', compact('currentMenu', 'subMenus'));
    }

    public function accessoriesList($slug) {
        $currentMenu = Menu::where('slug', $slug)->firstOrFail();
        $products = $currentMenu->products()->where('status', 1)->get();

        return view('pages.gallery_list', compact('currentMenu', 'products'));
    }

}
