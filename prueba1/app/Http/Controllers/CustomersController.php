<?php

namespace App\Http\Controllers;


use App\customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return customer::all();
    }
    public function show(customer $customer)
    {
        return $customer;
    }
    public function store(Request $request)
    {
        $customer = customer::create($request->all());
        return response()->json($customer, 201);
    }
    public function update(Request $request, customer $customer)
    {
        $customer->update($request->all());
        return response()->json($customer, 200);
    }
    public function delete(customer $customer)
    {
        $customer->delete();
        return response()->json(null, 204);
    }
}
