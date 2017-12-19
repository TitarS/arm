<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;


class GalleryController extends Controller
{
    public function accessories() {
        $currentMenu = Menu::where('slug', 'accessories')->firstOrFail();
        $subMenus = $currentMenu->children()->get();

        return view('pages.gallery', compact('currentMenu', 'subMenus'));
    }

    public function accessoriesList($slug) {
        $currentMenu = Menu::where('slug', $slug)->firstOrFail();

        return view('pages.gallery_list', compact('currentMenu'));
    }
}
