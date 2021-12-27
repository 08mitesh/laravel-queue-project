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
//    foreach (range(1,10) as $i)
        \App\Jobs\testJob::dispatch();

    \App\Jobs\processPayment::dispatch()->onQueue('payment');

    return view('welcome');
});
