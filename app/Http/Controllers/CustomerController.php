<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addCustomer(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'string|max:255',
                'email' => 'email|unique:customers,email',
                'phone' => 'string|max:15',
            ]);

            $customer = Customer::create($validatedData);

            return response()->json(['status' => "Data has been inserted"], 201);
        } catch (\Exception $e) {
            return response()->json(['status' => "Operation Failed", 'error' => $e->getMessage()], 500);
        }
    }


    public function get(){
        
    }
}
