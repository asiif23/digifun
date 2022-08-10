<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function index(Request $request)
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-QiwYYQHxoBc8UrpWVaJ8y_GY';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $params = array(
            'transaction_details' => array(        
                'order_id' => rand(),        
                'gross_amount' => 25000,
            ),
            'customer_details' => array(        
                'first_name' => $name,      
                'last_name' => '',
                'email' => $email,
                'phone' => $phone,
                'address' => $address,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return response()->json(['token'=>$snapToken, 'name'=>$name, 'address'=>$address]);
    }
}
