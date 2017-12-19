<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;


class GalleryController extends Controller
{
    public function index() {
        $currentMenu = Menu::where('slug', 'accessories')->firstOrFail();
        $subMenus = $currentMenu->children()->get();

        return view('pages.gallery_list', compact('currentMenu', 'subMenus'));
    }

    public function gallery($slug) {
        $currentMenu = Menu::where('slug', $slug)->firstOrFail();

        return view('pages.gallery_page', compact('currentMenu'));
    }
}
