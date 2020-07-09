<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return product::all();
    }
    public function show(product $product)
    {
        return $product;
    }
    public function store(Request $request)
    {
        $product = product::create($request->all());
        return response()->json($product, 201);
    }
    public function update(Request $request, product $product)
    {
        $product->update($request->all());
        return response()->json($product, 200);
    }
    public function delete(product $product)
    {
        $product->status = 'deleted';

        $product->save();
        return response()->json(null, 204);
    }
}
