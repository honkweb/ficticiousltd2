<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;

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

    // Test database connection
    try {
        DB::connection()->getPdo();
        echo "Connected successfully to: " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die("Could not connect to the database. Please check your configuration. error:" . $e );
    }

    return view('welcome');
});
Route::get('/client/search', [ClientController::class, 'search'])->name('client.search');
Route::get('/contact/search', [ContactController::class, 'search'])->name('contact.search');
Route::resource('/client', ClientController::class);
Route::get('/client/{client}/addcontact', [ClientController::class, 'addcontact'])->name('client.addcontact');
Route::post('/client/storecontact', [ClientController::class, 'storecontact'])->name('client.storecontact');

Route::resource('/contact', ContactController::class);
Route::resource('/message', MessageController::class);