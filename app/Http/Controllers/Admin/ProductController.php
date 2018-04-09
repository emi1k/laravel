<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();

        return view('admin.products.index', [
            'products' => $products
        ]);
    }
    public function add(Request $request, $id)
    {
        $product = new Product();

        return view('admin.products.form', [
            'product' => $product
        ]);
    }
    public function create(Request $request, $id)
    {

    }
    public function edit(Request $request, $id)
    {

    }
    public function update(Request $request, $id)
    {

    }

}
