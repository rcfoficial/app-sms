<?php

use App\Http\Controllers\TwilioController;
use App\Http\Controllers\VonageController;
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
    return view('welcome');
});



Route::controller(VonageController::class)->group(function (){
    Route::get('/vonage', 'index')->name('vonage');
    Route::get('/vonage/send', 'sendVonage')->name('vonage.send');
});

Route::controller(TwilioController::class)->group(function (){
    Route::get('/twilio/send', 'sendTwilio')->name('twilio.send');
});
