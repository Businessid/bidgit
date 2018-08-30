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
Route::get('register', 'RegisterController@company');

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

// Create Branches Data From  Register Page
Route::get('register/branches', 'MoreRegisterController@branches');

/* Select Ajax From Register Page  */
Route::post('register/selectActivities', 'AjaxController@selectActivities');
Route::post('register/selectCities', 'AjaxController@selectCities');
Route::post('register/selectAreas', 'AjaxController@selectAreas');

/*Fetch current location  From Register Page  */
Route::post('register/getCurrentCountry', 'AjaxController@getCurrentCountry');
Route::post('register/getCurrentCity', 'AjaxController@getCurrentCity');
Route::post('register/getCurrentArea', 'AjaxController@getCurrentArea');







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