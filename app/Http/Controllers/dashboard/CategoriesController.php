<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function CategoryListIndex(){

        return view("dashboard.categorieslist");
    }



    public function AddCategoryIndex(){

        return view("dashboard.add_category");
    }
}
