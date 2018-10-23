<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileStoreEditProductController extends Controller
{
    public function index(){
        return view('front_end.profile.add_product');
    }
}
