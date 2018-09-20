<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeController extends Controller
{
    public function AttributeListIndex(){

        return view("dashboard.categorieslist");
    }

    public function AddAttributeIndex(){

        return view("dashboard.categorieslist");
    }
}
