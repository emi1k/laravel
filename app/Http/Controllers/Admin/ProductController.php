<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
        ]);
        $input = $request->all();
        $product = new Product($input);
        $product->save();
        Session::flash('flash_message', 'Product successfully added!');
        return redirect()->route('admin-products-index');
    }
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
        ]);
        $input = $request->all();
        $product = Product::findOrFail($id);
        $product->fill($input)->save();
        Session::flash('flash_message', 'Product seccessfully update!');
        return redirect()->route('admin-products-index');
    }

}
