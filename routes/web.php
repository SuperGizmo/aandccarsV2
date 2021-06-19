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

Route::get('Index.html', function () {
    return view('pages.index');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('Keep-Safe-Information.html', function(){
    return view('pages.keepsafe');
});
Route::get('Booking-Information.html', function(){
    return view('pages.bookinginformation');
});
Route::get('Airport-Price-List.html', function(){
    return view('pages.airportprices');
});
Route::get('Payment-Options.html', function(){
    return view('pages.payment');
});
Route::get('Online-Booking.html', function(){
    return view('pages.onlinebooking');
});
Route::get('Reviews.html', function(){
    return view('pages.reviews');
});

Route::get('thankyou.html', function(){
    return view('pages.thankyou');
});

Route::post('sendmail', [App\Http\Controllers\mailController::class, 'getContactUsForm']);
