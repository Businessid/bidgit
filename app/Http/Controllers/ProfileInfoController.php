<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;

class ProfileInfoController extends Controller
{
    public function index(){

//        Companies::whare("")



        return view("front_end.profile.info");
    }
}
