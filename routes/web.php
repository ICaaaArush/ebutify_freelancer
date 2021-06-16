<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExploreController;


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

//  FREELANCER PRODUCT RESEARCH
Route::middleware(['auth:sanctum', 'verified'])->get('/product-research', [ProductController::class, 'productResearch'])->name('product-research');

//  FREELANCER VIEW PRODUCT-UPLOAD-PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/uploadPage', [ProductController::class, 'uploadPage'])->name('uploadPage');

//  FREELANCER UPLOAD PRODUCT
Route::post('/uploadProduct', [ProductController::class, 'uploadProduct'])->name('uploadProduct');

// FREELANCER EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product-edit');

//  FREELANCER UPDATE PRODUCT
Route::post('/product-update', [ProductController::class, 'productUpdate'])->name('productUpdate');

//  USER DOWNLOAD GIF
Route::get('/downloadGIF/{gifs}', [UserController::class, 'downloadGIF'])->name('downloadGIF');

// Route::get('/downloadGIF/{gifs}', [UserController::class, 'downloadGIF'])->name('downloadGIF');

//  USER BILLING PORTAL
Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal('billing')->name('billing-portal');
});

//  USER VIEW TRENDING PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/trending-products', [UserController::class, 'trendingProducts'])->name('trending-products');

//  USER TRENDING PRODUCT DETAILS
Route::middleware(['auth:sanctum', 'verified'])->get('/trending-product-details/{product_id}', [UserController::class, 'trendingProductDetails'])->name('trending-product-details');

//  USER VIEW FB AD PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/fb-ad-products', [UserController::class, 'fbAdProducts'])->name('fb-ad-products');

//  USER VIEW ALL PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/all-product', [UserController::class, 'allProduct'])->name('all-product');

//  USER ALL PRODUCT DETAILS
Route::middleware(['auth:sanctum', 'verified'])->get('/all-product-details/{product_id}', [UserController::class, 'allProductDetails'])->name('all-product-details');

//  USER VIEW UNTAPPED PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/untapped-product', [UserController::class, 'untappedProducts'])->name('untapped-product');



//  FREELANCER VIEW ALI EXPRESS PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/ali-express-products', [ExploreController::class, 'exploreAliProduct'])->name('ali-express-products');

//  FREELANCER VIEW UPLOAD ALI EXPRESS PRODUCTS PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/add-new-ali', [ExploreController::class, 'uploadAliPage'])->name('add-new-ali');

//  FREELANCER UPLOAD ALI EXPRESS PRODUCTS
Route::post('/upload-ali', [ExploreController::class, 'uploadAli'])->name('upload-ali');

//  FREELANCER VIEW AMAZON PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/amazon-products', [ExploreController::class, 'exploreAmazonProduct'])->name('amazon-products');

//  FREELANCER VIEW UPLOAD AMAZON PRODUCTS PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/add-new-amz', [ExploreController::class, 'uploadAmazonPage'])->name('add-new-amz');

//  FREELANCER UPLOAD AMAZON PRODUCTS
Route::post('/upload-amazon', [ExploreController::class, 'uploadAmazon'])->name('upload-amazon');

//  FREELANCER VIEW SHOPIFY PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/shopify-products', [ExploreController::class, 'exploreShopifyProduct'])->name('shopify-products');

//  FREELANCER VIEW UPLOAD SHOPIFY PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/add-new-shopify', [ExploreController::class, 'uploadShopifyPage'])->name('add-new-shopify');

//  FREELANCER UPLOAD SHOPIFY PRODUCTS
Route::post('/upload-shopify', [ExploreController::class, 'uploadShopify'])->name('upload-shopify');