<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\CustomerEmail;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function contact(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'contact_number' => 'phone:US,UA,RU,mobile'
        ]);
        $customer = Customer::add($request->all());

        \Mail::to($customer)->send(new CustomerEmail($customer));

        return redirect()->route('contacts')->with('status', trans('status.contact_sent'));
    }
}
