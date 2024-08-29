<?php



use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;





Route::get("/", [NewsController::class,"index"])->name('/');
Route::get('/details/{id}',[NewsController::class,'details']);
Route::get('/cat/{id}',[NewsController::class,'category']);
Route::get('/search',[NewsController::class,'search'])->name('search.index');

//login
Route::get('login',[UserController::class , 'showLogin'])->name('login');
Route::post('login',[UserController::class , 'handleLogin']);
//register
Route::get('register',[UserController::class , 'showRegister'])->name('register');
Route::post('register',[UserController::class , 'handleRegister']);
//forgo pass
Route::get('forgo',[UserController::class , 'showForgo'])->name('forgo');
Route::post('forgo',[UserController::class , 'handleForgo']);
//log out
Route::post('logout',[UserController::class , 'logout']) -> name('logout');



Route::get('dashboard',[AdminController::class, 'dashboard'])->name('dashboard');

Route::get('news',[AdminController::class, 'viewNews'])->name('news');
Route::get('categories',[AdminController::class, 'viewCategories'])->name('categories');


Route::get('addnews',[AdminController::class, 'addNews'])->name('addnews');
Route::post('addnews',[AdminController::class, 'handeAddNews']);

