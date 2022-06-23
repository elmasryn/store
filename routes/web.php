<?php
// FrontEnd
use App\Http\Livewire\Frontend\AboutUs;
use App\Http\Livewire\Frontend\Cart;
use App\Http\Livewire\Frontend\Checkout;
use App\Http\Livewire\Frontend\ContactUs;
use App\Http\Livewire\Frontend\Home;
use App\Http\Livewire\Frontend\Product;
use App\Http\Livewire\Frontend\Shop;
use App\Http\Livewire\Frontend\ThankYou;
use Illuminate\Support\Facades\Route;

// BackEnd
use App\Http\Livewire\Dashboard\Home\Home as DashboardHome;
use App\Http\Livewire\Dashboard\Settings\Settings;
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
// FrontEnd
Route::get('/' , Home::class)->name('home');
Route::get('/about-us' , AboutUs::class)->name('about-us');
Route::get('/cart' , Cart::class)->name('cart');
Route::get('/checkout' , Checkout::class)->name('checkout');
Route::get('/contact-us' , ContactUs::class)->name('contact-us');
Route::get('/shop' , Shop::class)->name('shop');
Route::get('/product/{product}' , Product::class)->name('product');
Route::get('/thank-you' , ThankYou::class)->name('thank-you');
//--------------------------------------------------------------------------

require __DIR__.'/auth.php';

//--------------------------------------------------------------------------
// BackEnd
Route::prefix('dashboard')->middleware('auth')->name('dashboard.')->group(function () {
    Route::get('/', DashboardHome::class)->name('home');
    Route::get('/settings', Settings::class)->name('settings');
});
//--------------------------------------------------------------------------

