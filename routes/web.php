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

Route::get('register/company', 'RegisterController@company');
Route::post('register/insert_company', 'RegisterController@insert_company');

Route::get('register/licence', 'RegisterController@licence');
Route::post('register/insert_licence', 'RegisterController@insert_licence');

Route::get('register/location', 'RegisterController@location');
Route::post('register/insert_location', 'RegisterController@insert_location');

Route::get('register/qregister', 'RegisterController@qregister');

Route::post('register/selectActivities', 'RegisterController@selectActivities');

Route::post('register/selectCities', 'RegisterController@selectCities');

Route::post('register/selectAreas', 'RegisterController@selectAreas');

/*Fetch current location */
Route::post('register/getCurrentCountry', 'RegisterController@getCurrentCountry');
Route::post('register/getCurrentCity', 'RegisterController@getCurrentCity');
Route::post('register/getCurrentArea', 'RegisterController@getCurrentArea');







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
