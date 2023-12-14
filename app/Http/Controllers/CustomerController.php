<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customers(){
        $customerList = Customer::all();
        return view('customers.customer',['customers'=>$customerList]);
    }
    public function new(){
        return view('customers.new-customer');
    }
    public function add(Request $request){
        $customer= $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'age' => 'required'
        ]);

        $saveData = Customer::create($customer);
        return redirect(route('customers.customer'));
    }

    public function modify(Customer $customer){
        return view('customers.modify',['customer'=>$customer]);
    }

    public function update(Customer $customer , Request $request){
        $updateCustomer= $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'age' => 'required'
        ]);

        $customer -> update($updateCustomer);
        return redirect(route('customers.customer'));
    }
}
