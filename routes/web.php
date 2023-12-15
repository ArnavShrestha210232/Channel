<?php

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//For User Part
Route::get('/', [UserController::class, 'index'])->name('main');
Route::get('/services', [UserController::class, 'service'])->name('service');
Route::get('/aboutus', [UserController::class, 'aboutus'])->name('aboutus');
Route::get('/blog', [UserController::class, 'blog'])->name('blog');
Route::get('/contact', [UserController::class, 'contactus'])->name('contact');
Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
Route::get('/language', [UserController::class, 'language'])->name('language');
Route::get('/abroad', [UserController::class, 'abroad'])->name('abroad');
Route::get('/message', [UserController::class, 'message'])->name('message');

//For Admin Part
Route::get('/home1', [AdminController::class, 'home'])->name('home1');
Route::get('/login1', [AdminController::class, 'login'])->name('login');
Route::get('/registration', [AdminController::class, 'registration'])->name('registration');
Route::get('/googlemap', [AdminController::class, 'googlemap'])->name('googlemap');
Route::get('/chartjs', [AdminController::class, 'chartjs'])->name('chartjs');
Route::get('/flotchart', [AdminController::class, 'flotchart'])->name('flotchart');
Route::get('/morris', [AdminController::class, 'morris'])->name('morris');
Route::get('/xcharts', [AdminController::class, 'xcharts'])->name('xcharts');
Route::get('/basictable', [AdminController::class, 'basictable'])->name('basictable');
Route::get('/dynamictable', [AdminController::class, 'dynamictable'])->name('dynamictable');
Route::get('/editabletable', [AdminController::class, 'editabletable'])->name('editabletable');
Route::get('/responsivetable', [AdminController::class, 'responsivetable'])->name('responsivetable');
Route::get('/error404', [AdminController::class, 'error404'])->name('error404');
Route::get('/error500', [AdminController::class, 'error500'])->name('error500');
Route::get('/googlemap', [AdminController::class, 'googlemap'])->name('googlemap');
Route::get('/editprofile', [AdminController::class, 'editprofile'])->name('editprofile');
Route::get('/faq', [AdminController::class, 'faq'])->name('faq');
Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
Route::get('/calender', [AdminController::class, 'calender'])->name('calender');
Route::get('/todo', AdminController::class . '@todo')->name('todo');




//



Route::group(['prefix' => 'admin'], function () {
    // Admin Dashboard
    Route::get('/dashboard', AdminController::class . '@home')->name('admin.dashboard');
    Route::resource('sliders', SliderController::class, );

});