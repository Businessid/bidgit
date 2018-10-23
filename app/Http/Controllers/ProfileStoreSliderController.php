<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileStoreSliderController extends Controller
{
    public function index(){
        return view('front_end.profile.slider');
    }
}
