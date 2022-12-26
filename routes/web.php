<?php

use App\Http\Controllers\postcontroller;
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
})->name('home');
Route::get('/raquesta', function () {
    return view('raquesta');
});


Route::controller(postcontroller::class)->group(function(){
    Route::get('/brochure','showBrochure')->name('brochure');
    Route::get('/clints','showClints')->name('clints');
    Route::get('/compay','showCompay')->name('compay');
    Route::get('/completed','showCompleted')->name('completed');
    Route::get('/contact_us','showContact')->name('Contact');
    Route::get('/gellery','showGellery')->name('gellery');
    Route::get('/minsters','showMinsters')->name('minsters');
    Route::get('/on_going','showOnGoing')->name('on_going');
    Route::get('/product','showProduct')->name('product');
    Route::get('/qualit_policy','showQualitPolicy')->name('qualit_policy');
    Route::get('/requesta','showRaquesta')->name('requesta');
    Route::get('/team','showTeam')->name('team');
});