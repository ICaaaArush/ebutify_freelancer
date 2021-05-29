<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


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

// Route::group(['middleware' => ['auth:sanctrum']], function(){

// })

//  USER DASHBOARD VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//  FREELANCER DASHBOARD VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [FreelancerController::class, 'dashboard'])->name('freelancer-dashboard');

//  LOGOUT
Route::get('/logout', [FreelancerController::class, 'logoutFreelancer'])->name('logout');

//  WORK REPORT VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/work-report', [FreelancerController::class, 'workReportFreelancer'])->name('work-report');

//  MESSAGE VIEW
Route::middleware(['auth:sanctum', 'verified'])->get('/message', [FreelancerController::class, 'message'])->name('message');

//  PROFILE (HAS TO BE FOR USER AND FREELANCER)
Route::middleware(['auth:sanctum', 'verified'])->get('/myprofile', [FreelancerController::class, 'myprofile'])->name('myprofile');

//  SUBSRIBE FOR USER
Route::post('/subscribe', [FreelancerController::class,'subscribe'])->name('subscribe');

//  PRODUCT RESEARCH
Route::middleware(['auth:sanctum', 'verified'])->get('/product-research', [ProductController::class, 'productResearch'])->name('product-research');

//  FREELANCER VIEW PRODUCT-UPLOAD-PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/uploadPage', [ProductController::class, 'uploadPage'])->name('uploadPage');

//  FREELANCER UPLOAD PRODUCT
Route::post('/uploadProduct', [ProductController::class, 'uploadProduct'])->name('uploadProduct');

// FREELANCER EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product-edit');

//  FREELANCER UPDATE PRODUCT
Route::post('/product-update', [ProductController::class, 'productUpdate'])->name('productUpdate');

//  USER VIEW TRENDING PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/trending-products', [UserController::class, 'trendingProducts'])->name('trending-products');

//  USER DOWNLOAD GIF
Route::get('/downloadGIF/{gifs}', [UserController::class, 'downloadGIF'])->name('downloadGIF');

// Route::get('/downloadGIF/{gifs}', [UserController::class, 'downloadGIF'])->name('downloadGIF');

//  USER BILLING PORTAL
Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal('billing')->name('billing-portal');
});

//  USER PRODUCT DETAILS
Route::middleware(['auth:sanctum', 'verified'])->get('/product-details', [UserController::class, 'productDetails'])->name('product-details');