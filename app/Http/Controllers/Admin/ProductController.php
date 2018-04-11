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
    public function add(Request $request)
    {
        $product = new Product();

        return view('admin.products.form', [
            'product' => $product
        ]);
    }
    public function create(Request $request)
    {
        $input = $request->all();
        $product = new Product($input);
        $product->save();
        return redirect()->route('admin-products-index');
    }
    public function edit(Request $request, $id)
    {


    }
    public function update(Request $request, $id)
    {

    }

}
