<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demo\DemoController;

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



// Route::get('/about', [DemoController::class, 'index']);
// Route::get('/contact', [DemoController::class, 'contact']);

//Route Group
Route::controller(DemoController::class)->group(function () {
    Route::get('/about', 'index')->name('about.page');
    Route::get('/contact', 'contact')->name('contact.page');;
});

Route::get('/contact', function () {
    return view('contact');
});
