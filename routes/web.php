<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Products;
use App\Livewire\Cart;
use App\Livewire\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

Route::get('/', function () {return view('welcome');})->name('/');
Route::get('/register', function () {
    return view('livewire.reg');
});


Route::middleware(['auth', 'checkrole:customer'])->group(( function () {
    Route::get('/home', Home::class)->name('home');
    Route::get('/cart', Cart::class)->name('cart');
}));

Route::middleware(['auth', 'checkrole:admin'])->group(( function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/products', Products::class)->name('products');
}));

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('/');
})->name('logout');





