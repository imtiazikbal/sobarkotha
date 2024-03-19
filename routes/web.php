<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UpazilaController;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('optimize:clear');
});



Route::get('/lead',[FontendController::class,'lead']);

Route::get('/',[FontendController::class,'index'])->name('home');

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Category Route
Route::get('/admin/category', [CategoryController::class, 'index']);
Route::get('/admin/create/category', [CategoryController::class, 'create']);
Route::post('/admin/store/category', [CategoryController::class, 'store']);
Route::get('/admin/edit/{category}', [CategoryController::class, 'edit']);
Route::post('/admin/update/category/{category}', [CategoryController::class, 'update']);
Route::post('/admin/destroy/category/{category}', [CategoryController::class, 'destroy']);

//subCategory Route

Route::get('/admin/subCategory', [SubCategoryController::class, 'index']);
Route::get('/admin/create/subCategory', [SubCategoryController::class, 'create']);
Route::post('/admin/store/subCategory', [SubCategoryController::class, 'store']);
Route::get('/admin/edit/subCategory/{subCategory}', [SubCategoryController::class, 'edit']);
Route::post('/admin/update/subCategory/{subCategory}', [SubCategoryController::class, 'update']);
Route::post('/admin/destroy/subCategory/{subCategory}', [SubCategoryController::class, 'destroy']);

// Featured Area
Route::get('/admin/featured', [FeaturedController::class, 'index']);
Route::get('/admin/create/featured', [FeaturedController::class, 'create']);
Route::post('/admin/store/featured', [FeaturedController::class, 'store']);
Route::get('/admin/edit/featured/{featured}', [FeaturedController::class, 'edit']);
Route::post('/admin/update/featured/{featured}', [FeaturedController::class, 'update']);
Route::post('/admin/destroy/featured/{featured}', [FeaturedController::class, 'destroy']);

//Division Route
Route::get('/admin/division', [DivisionController::class, 'index']);
Route::get('/admin/create/division', [DivisionController::class, 'create']);
Route::post('/admin/store/division', [DivisionController::class, 'store']);
Route::get('/admin/edit/division/{division}', [DivisionController::class, 'edit']);
Route::post('/admin/update/division/{division}', [DivisionController::class, 'update']);
Route::post('/admin/destroy/division/{division}', [DivisionController::class, 'destroy']);

//District
Route::get('/admin/district', [DistrictController::class, 'index']);
Route::get('/admin/create/district', [DistrictController::class, 'create']);
Route::post('/admin/store/district', [DistrictController::class, 'store']);
Route::get('/admin/edit/district/{district}', [DistrictController::class, 'edit']);
Route::post('/admin/update/district/{district}', [DistrictController::class, 'update']);
Route::post('/admin/destroy/district/{district}', [DistrictController::class, 'destroy']);

//Upazila Route
Route::get('/admin/upazila', [UpazilaController::class, 'index']);
Route::get('/admin/create/upazila', [UpazilaController::class, 'create']);
Route::post('/admin/store/upazila', [UpazilaController::class, 'store']);
Route::get('/admin/edit/upazila/{upazila}', [UpazilaController::class, 'edit']);
Route::post('/admin/update/upazila/{upazila}', [UpazilaController::class, 'update']);
Route::post('/admin/destroy/upazila/{upazila}', [UpazilaController::class, 'destroy']);
//Topic Route

Route::get('/admin/topic', [TopicController::class, 'index']);
Route::get('/admin/create/topic', [TopicController::class, 'create']);
Route::post('/admin/store/topic', [TopicController::class, 'store']);
Route::get('/admin/edit/topic/{topic}', [TopicController::class, 'edit']);
Route::post('/admin/update/topic/{topic}', [TopicController::class, 'update']);
Route::post('/admin/destroy/topic/{topic}', [TopicController::class, 'destroy']);





//News Route
Route::get('/admin/news', [NewsController::class, 'index']);
Route::get('/admin/create/news', [NewsController::class, 'create']);
Route::post('/admin/store/news', [NewsController::class, 'store']);
Route::get('/admin/edit/news/{news}', [NewsController::class, 'edit']);
Route::post('/admin/update/news/{news}', [NewsController::class, 'update']);
Route::post('/admin/destroy/news/{news}', [NewsController::class, 'destroy']);

// get news by category
Route::get('/admin/get-news-by-category', [FontendController::class, 'getNewsByCategory'])->name('newsByCategory');


// get news by title id
Route::get('/admin/get-news-by-title', [FontendController::class, 'getNewsByTitle'])->name('newsByTitle');

require __DIR__.'/auth.php';
