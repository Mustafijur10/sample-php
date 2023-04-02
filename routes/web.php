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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/hello', function () {
    return "<h1>Oishee says Hi</h1>";
});

Route::get('/about', function () {
    return view('pages.about');
});


Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'hello from '.$name.' with id '.$id;
});

Route::get('/', 'PagesCoontroller@index');*/

Route::get('/', function () {
    return redirect()->route('login.index');
});
Route::get('/', 'homecontroller@home');

Route::get('/registration', function () {
    return view('registration.reg');
});

Route::get('/login', function () {
    return view('login.index');
});

Route::get('registration', 'test@create');
Route::post('store', 'test@store');

Route::post('insert','regcontroller@insert');

Route::get('/login', 'logincontroller@index')->name('login.index');
Route::post('/login', 'logincontroller@verify');
