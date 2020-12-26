<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function listOrder(){
        return view('site.customer-order');

    }

    public function showCustomer(){
        return view('site.customer');
    }

    public function customerAddress(){
        return view('site.customer-address');
    }

    public function customerComment(){
        return view('site.customer-comment');
    }

    public function customerAddressCreate(){
        return view('site.customer-address-create');
    }
}
