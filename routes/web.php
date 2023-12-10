<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogViewController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\AdminPanelController;
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

// Route::get('/',function(){
//     return view('admin-panel.adminhome');
// });

Route::get('/',[BlogViewController::class,'viewHomepage']);
Route::get('/contact',[BlogViewController::class,'viewContact']);
Route::get('/services',[BlogViewController::class,'viewServices']);
Route::get('/about',[BlogViewController::class,'viewAbout']);
Route::get('/blog',[BlogViewController::class,'viewBlog']);


Route::get('/home',[AdminViewController::class,'viewHomepage']);
Route::get('/charts',[AdminViewController::class,'viewCharts']);
Route::get('/show_post',[AdminViewController::class,'showPostPage']);
Route::get('/login',[AdminViewController::class,'viewLogin']);
Route::get('/register',[AdminViewController::class,'viewRegister']);
Route::get('/add_post',[AdminViewController::class,'addPostPage']);


Route::post('/add_post',[AdminPanelController::class,'add_post']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';