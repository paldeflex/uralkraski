<?php

namespace App\Http\Controllers;

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

    public function show(string $id)
    {
        return view('product.show');
    }

    public function edit(string $id)
    {
        return view('product.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function search()
    {
        return view('product.search');
    }
}
