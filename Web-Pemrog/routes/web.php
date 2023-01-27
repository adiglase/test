<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardTripController;
use App\Http\Controllers\DashboardOrderController;

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
//     return view('home', [
//         "title" => "Home",
//         "posts" =>Post::all()
//     ]);
// });


Route::get('/', [TripController::class, 'index']);
Route::get('/Paketwisata/{trip:slug}', [TripController::class, 'show']);

Route::get('/Order', [OrderController::class, 'show']);
Route::post('/Order', [OrderController::class, 'store']);

Route::get('/kontak', function () {
    return view('main.kontak', [ 
        "title" => "Kontak"
    ]);
});

Route::get('/Pariwisata', [PostController::class, 'index']);
Route::get('/Pariwisata/{post:slug}', [PostController::class, 'show']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [ 
        "title" => "Dashboard"
    ]);
});


Route::resource('/dashboard/orders', DashboardOrderController::class)
->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');


Route::get('/dashboard/trips/checkSlug', [DashboardTripController::class, 'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/trips', DashboardTripController::class)
->middleware('auth');



// Route::controller(PostController::class)->group(function() {
//     Route::get('posts', 'index',);
// });