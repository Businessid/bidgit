<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileStoreProductListController extends Controller
{
    public function index(){
         return view('front_end.profile.product_list');
    }
}
