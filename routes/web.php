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
Route::get('/about',[BlogViewController::class,'viewAbout']);


Route::get('/home',[AdminViewController::class,'viewDashboard']);
Route::get('/charts',[AdminViewController::class,'viewCharts']);
Route::get('/show_post',[AdminViewController::class,'showPostPage']);
Route::get('/login',[AdminViewController::class,'viewLogin']);
Route::get('/register',[AdminViewController::class,'viewRegister']);
Route::get('/add_post',[AdminViewController::class,'addPostPage']);


Route::post('/add_post',[AdminPanelController::class,'addPost']);
Route::get('/delete_post/{id}',[AdminPanelController::class,'deletePost']);
Route::get('/post_details/{id}',[AdminPanelController::class,'postDetails']);
Route::get('/user_post',[AdminPanelController::class,'userPost'])->middleware('auth');
Route::get('/my_posts',[AdminPanelController::class,'myPosts'])->middleware('auth');
Route::get('/my_post_del',[AdminPanelController::class,'myPostDel'])->middleware('auth');
Route::get('/accept_post/{id}',[AdminPanelController::class,'acceptPost'])->middleware('auth');
Route::get('/reject_post/{id}',[AdminPanelController::class,'rejectPost'])->middleware('auth');
Route::post('/create_post',[AdminPanelController::class,'userCreatePost'])->middleware('auth');

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
