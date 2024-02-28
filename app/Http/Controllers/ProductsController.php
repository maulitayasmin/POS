<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product(){
        return view('product.category.menu');
    }
    public function food(){
        return view ('product.category.food');
    }

    public function beauty(){
        return view ('product.category.beauty');
    }
    
    public function homecare(){
        return view ('product.category.homecare');
    }

    public function babykid(){
        return view ('product.category.baby');
    }
}
