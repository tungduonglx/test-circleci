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

    //\Illuminate\Support\Facades\Log::info('User login successful 1111111', ['user_id' => '123']);
    //dd(\Carbon\Carbon::now());
    //dd(\Illuminate\Support\Facades\DB::table('user'));

    return view('welcome');
});


