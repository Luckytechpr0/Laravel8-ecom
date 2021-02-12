<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\LoinComponent;

use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\CheckOutComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\DetailComponent;
use App\Http\Livewire\ThankYouComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/ ', HomeComponent::class);


Route::get('/', function () {
        return view('layouts.base');
     });

//      Route::get('/shop', function () {
//         return view('layouts.base');
//      });

//      Route::get('/about', function () {
//         return view('about');
//      });
    
//      Route::get('/cart', function () {
//         return view('layouts.base');
//      });
   
//      Route::get('/contact-us', function () {
//         return view('contact-us');
//      });

    

     Route::get('/contact-us', ContactUsComponent::class);
     Route::get('/detail ', DetailComponent::class);
    //  Route::get('/return-policy ', ReturnPolicyComponent::class);
    //  Route::get('/privacy-policy ', PrivacyPolicyComponent::class);
     Route::get('/check-out ', CheckOutComponent::class);
    //  Route::get('/ thank-you', ThankYouComponent::class);
    //  Route::get('/terms-condition ', TermsConditionComponent::class);

    // Route::get('/',HomeComponent ::class);

    Route::get('/shop', ShopComponent::class);
    
    Route::get('/cart', CartComponent::class);
    Route::get('/about', AboutComponent::class);