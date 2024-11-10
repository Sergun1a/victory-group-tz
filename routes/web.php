<?php

use Illuminate\Support\Facades\Route;

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
    $theme = Session::get('theme', 'classic');
    return view('themes.'.$theme.'.home'); // По умолчанию показываем classic
});

Route::get('/contacts', function () {
    $theme = Session::get('theme', 'classic');
    return view('themes.'.$theme.'.contacts'); // По умолчанию показываем classic
});

Route::post('/save', function (\Illuminate\Http\Request $request) {
    $theme = $request->input('theme');

    // Храните выбранную тему в сессии или в базе данных
    Session::put('theme', $theme);

    return redirect('/');
});