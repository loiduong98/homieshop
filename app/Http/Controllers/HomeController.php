<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getLayout(){
        return view('page.layout.home');
    }
    public function getCategory(){
        return view('page.layout.category');
    }
    public function getProductPage(){
        return view('page.layout.product-page');
    }
    public function getCheckOut(){
        return view('page.layout.checkout');
    }
    public function getCart(){
        return view('page.layout.cart');
    }
}
