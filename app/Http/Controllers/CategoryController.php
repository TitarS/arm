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

        return view('pages.category_list');
    }

}
