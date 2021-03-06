<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\CustomerEmail;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
use Validator;
use Mail;

class CustomersController extends Controller
{
    public function contact(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:200',
            'email' => 'required|email',
            'contact_number' => 'phone:US,UA,RU'
        ]);
        if($validator->passes()) {
            $customer = Customer::add($request->all());
            //\Mail::to($customer)->send(new CustomerEmail($customer));
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new CustomerEmail($customer));

            return response()->json(['success' => trans('status.contact_sent')]);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function calculate(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:200',
            'email' => 'required|email',
            'contact_number' => 'phone:UA,ES,RU'/*,
            'image' => 'nullable|image'*/
        ]);

        if($validator->passes()) {
            $customer = Customer::add($request->all());
            $customer->uploadImage(
                $request->file('image'),
                $request->get('email')
            );
            /*\Mail::to($customer)->queue(new CustomerEmail($customer));*/
            \Mail::to(env('MAIL_TO_ADDRESS'))->send(new CustomerEmail($customer));

            return response()->json(['success' => trans('status.contact_sent')]);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    /*        return redirect()->back()
                ->with('status', trans('status.contact_sent'));*/
    }

    public function callback(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:200',
            'contact_number' => 'required|phone:UA,ES,RU'
        ]);

        if($validator->passes()) {
            $customer = Customer::add($request->all());
            \Mail::to(env('MAIL_TO_ADDRESS'))->send(new CustomerEmail($customer));

            return response()->json(['success' => trans('status.contact_sent')]);
        }

        return response()->json(['error' => $validator->errors()->all()]);
    }
}
