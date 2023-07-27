<?php

use App\Http\Livewire\Confirm;
use App\Http\Livewire\StripeCheckout;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('/detail-page', function () {
    return view('detail-page');
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/stripe', [StripeCheckout::class,'create']
);

Route::get('/payment/success', [Confirm::class,'message']
)->name('success');

// Route::get('/payment/success', function () {
    
//     return view('detail-page');
// })->name('success');

Route::get('/payment/cancel', function () {
    return view('appointment');
})->name('cancel');

