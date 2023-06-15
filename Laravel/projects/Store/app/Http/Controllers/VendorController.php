<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    //
    public function Vendor_Dashboard(){
        return view('vendor.vendor_dashboard');
    }// End Method
}
