<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    $products = Product::with('category')->get();
    return view('products.index', compact('products'));
    }


    public function create()
    {
    return view('products.create');
    }

    // Implement other CRUD methods (create, store, edit, update, destroy)
}
