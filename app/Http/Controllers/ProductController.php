<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();

        return view('index', [
            'products' => $products
        ]);
    }
    public function view(Request $request, $code)
    {
        $product = Product::where('code', $code)->first();

        return view('product.view', [
            'product' => $product,
        ]);
    }
}
