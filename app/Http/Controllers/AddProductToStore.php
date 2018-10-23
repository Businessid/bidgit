<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductToStore extends Controller
{
    function AddProductToStoreIndex(){
        return view('front_end.profile.add_product');
    }
}
