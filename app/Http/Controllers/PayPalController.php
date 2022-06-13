<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function returnPayPal(Request $request)
    {
        dd($request->all());
    }
}
