<?php

use App\Http\Livewire\AboutUs;
use App\Http\Livewire\Cart;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\ContactUs;
use App\Http\Livewire\Home;
use App\Http\Livewire\Product;
use App\Http\Livewire\Shop;
use App\Http\Livewire\ThankYou;
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

//--------------------------------------------------------------------------
// fronEnd

Route::get('/' , Home::class)->name('home');
Route::get('/about-us' , AboutUs::class)->name('about-us');
Route::get('/cart' , Cart::class)->name('cart');
Route::get('/checkout' , Checkout::class)->name('checkout');
Route::get('/contact-us' , ContactUs::class)->name('contact-us');
Route::get('/shop' , Shop::class)->name('shop');
Route::get('/product/{product}' , Product::class)->name('product');
Route::get('/thank-you' , ThankYou::class)->name('thank-you');

require __DIR__.'/auth.php';

//--------------------------------------------------------------------------
