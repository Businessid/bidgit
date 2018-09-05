<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Session;
use File;
use Intervention\Image\ImageManagerStatic as Image;

use App\Companies;
use App\Users_Category;
use App\Countries;
use App\Users_Legal_Status;
use App\Users;
use App\Users_Activities;
use App\UsersCompanies;


class ProfileController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

        public function index(Request $request)
    {
        //return view('front_end.profile');
    }
}
