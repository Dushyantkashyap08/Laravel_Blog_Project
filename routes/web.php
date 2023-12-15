<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogViewController;
use App\Http\Controllers\AdminViewController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogController;
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

//BlogViewController Routes here
 Route::get('/',[BlogViewController::class,'viewHomepage']);
 Route::get('/contact',[BlogViewController::class,'viewContact']);
 Route::get('/about',[BlogViewController::class,'viewAbout']);
 Route::get('/user_post',[BlogViewController::class,'userPost'])->middleware('auth');


//AdminViewController Routes here
Route::get('/home',[AdminViewController::class,'viewDashboard']);
Route::get('/charts',[AdminViewController::class,'viewCharts']);
Route::get('/show_post',[AdminViewController::class,'showPostPage']);
Route::get('/login',[AdminViewController::class,'viewLogin']);
Route::get('/register',[AdminViewController::class,'viewRegister']);
Route::get('/add_post',[AdminViewController::class,'addPostPage']);
Route::get('/comments_table',[AdminViewController::class,'viewComments']);



//AdminPanelController Routes here
 Route::post('/add_post',[AdminPanelController::class,'addPost']);
 Route::get('/delete_post/{id}',[AdminPanelController::class,'deletePost']);
 Route::get('/accept_post/{id}',[AdminPanelController::class,'acceptPost'])->middleware('auth');
 Route::get('/reject_post/{id}',[AdminPanelController::class,'rejectPost'])->middleware('auth');
 Route::get('/delete_comment/{id}', [AdminPanelController::class, 'deleteComment'])->name('delete_comment');
  

//MailController Routes here
 Route::post('/send_mail', [MailController::class, 'sendMail'])->name('send_mail');
 
//BlogController Routes here
 Route::get('/post_details/{id}',[BlogController::class,'postDetails']);//b
 Route::get('/submit_comment/{id}', [BlogController::class, 'submitComment'])->name('submit_comment');//b
 Route::post('/create_post',[BlogController::class,'userCreatePost'])->middleware('auth');//b
 Route::get('/my_post_del',[BlogController::class,'myPostDel'])->middleware('auth');//b
 Route::get('/my_posts',[BlogController::class,'myPosts'])->middleware('auth');//b


//HomeController Routes here
 Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
 
 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });

require __DIR__.'/auth.php';
