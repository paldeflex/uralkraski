<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function view;

class ProductController extends Controller
{

    public function index()
    {
        return view('product.index');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        return view('product.show');
    }

    public function edit(Product $product)
    {
        return view('product.edit');
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }

    public function search()
    {
        return view('product.search');
    }
}
