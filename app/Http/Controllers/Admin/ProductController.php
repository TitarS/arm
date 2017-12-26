<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        return view('admin.products.index');
    }

    public function show($slug) {
        return view('admin.products.edit');
    }

    public function create() {
        return view('admin.products.create');
    }
}
