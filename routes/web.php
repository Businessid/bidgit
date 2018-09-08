<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Register
|--------------------------------------------------------------------------
*/
Route::get('register', 'RegisterController@index');


Route::get('register/personal', 'RegisterController@personal');
Route::post('register/insert_personal', 'RegisterController@insert_personal');

// Company Data From  Register Page
Route::get('register/company', 'RegisterController@company');
Route::post('register/insert_company', 'RegisterController@insert_company');

// licence Data From  Register Page
Route::get('register/licence', 'RegisterController@licence');
Route::post('register/insert_licence', 'RegisterController@insert_licence');

// location Data From  Register Page
Route::get('register/location', 'RegisterController@location');
Route::post('register/insert_location', 'RegisterController@insert_location');


// Complete Register Page ( Quick Registration )
Route::get('register/qregister', 'RegisterController@qregister');

// Create Users Uata From  Register Page
Route::get('register/users', 'MoreRegisterController@users');
Route::post('register/insert_users', 'MoreRegisterController@insert_users');
// Authorize User Data From  Register Page
Route::post('register/authoriszation', 'MoreRegisterController@authoriszation');

// Create Owners Data From  Register Page
Route::get('register/owners', 'MoreRegisterController@owners');
Route::post('register/insert_owners', 'MoreRegisterController@insert_owners');

// Create Banches Data From  Register Page
Route::get('register/branches', 'MoreRegisterController@branches');
Route::post('register/insert_branches', 'MoreRegisterController@insert_branches');

// Create Verify Data From  Register Page
Route::post('register/docuemnt', 'MoreRegisterController@upload_decument');
Route::post('register/dlt_docuemnt', 'MoreRegisterController@delete_decument');
Route::get('register/verify', 'MoreRegisterController@verify');

// Insert Verify Data From  Register Page
Route::post('register/upload_doc', 'MoreRegisterController@upload_verify');

/* Select Ajax From Register Page  */
Route::post('register/selectActivities', 'AjaxController@selectActivities');
Route::post('register/selectCities', 'AjaxController@selectCities');
Route::post('register/selectAreas', 'AjaxController@selectAreas');

/*Fetch current location  From Register Page  */
Route::post('register/getCurrentCountry', 'AjaxController@getCurrentCountry');
Route::post('register/getCurrentCity', 'AjaxController@getCurrentCity');
Route::post('register/getCurrentArea', 'AjaxController@getCurrentArea');

/*Personal register Success*/
Route::get('register/success', 'RegisterController@success');


Route::get('register/test', 'MoreRegisterController@test');
Route::post('register/file_uppload', 'MoreRegisterController@file_uppload');


// Profile Start
Route::get('profile', 'ProfileController@error');
Route::get('profile/{id}', 'ProfileController@index');
// Create Post rdata Page
Route::post('profile/fileupload', 'ProfileController@fileupload');

Route::get('/home', function () {
    return view('home');
});
Route::get('user', 'Controller@userlist');

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();

    return redirect('/');
});






Route::get('countries', 'AjaxController@AllCountry');
Route::get('jsontoarray', 'AjaxController@jsontoarray');