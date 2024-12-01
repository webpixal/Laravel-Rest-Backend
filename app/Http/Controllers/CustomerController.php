<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    function getCustomer(){
        $customers = CustomerModel::all(); // Fetch all customers
        return response()->json($customers, 200);
    }


    public function addCustomer(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        $customers = CustomerModel::create($validated);
        return response()->json($customers, 201);
    }
}
