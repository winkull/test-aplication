<?php

use App\Http\Livewire\ContactIndex;
use App\Http\Livewire\ProductCreate;
use App\Http\Livewire\ProductIndex;
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

Route::get('/', ContactIndex::class);
Route::get('/form', ProductCreate::class);
Route::get('/product', ProductIndex::class);

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/form', function () {
//     return view('form-product');
// });

// Route::get('/product', function () {
//     return view('product');
// });
