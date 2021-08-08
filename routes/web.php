<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\UserExploreController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;



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

//  PROFILE USER
Route::middleware(['auth:sanctum', 'verified'])->get('/userprofile', [UserController::class, 'profile'])->name('myprofile');

//  USER PROFILE UPDATE
Route::middleware(['auth:sanctum', 'verified'])->post('/user-profile-update',[UserController::class, 'profileupdate']);

//  USER PASSWORD CHANGE
Route::middleware(['auth:sanctum', 'verified'])->post('/user-password-cahnge',[UserController::class, 'passwordchange']);

//  PROFILE FREELANCER
Route::middleware(['auth:sanctum', 'verified'])->get('/freelancer-profile', [UserController::class, 'freelancerProfile'])->name('freelancer-profile');


//  SUBSRIBE FOR USER
Route::post('/subscribe', [FreelancerController::class,'subscribe'])->name('subscribe');

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
Route::middleware(['auth:sanctum', 'verified'])->get('/product-details/{product_id}', [UserController::class, 'trendingProductDetails'])->name('product-details');

//  USER VIEW FB AD PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/fb-ad-products', [UserController::class, 'fbAdProducts'])->name('fb-ad-products');

//  USER VIEW ALL PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/all-product', [UserController::class, 'allProduct'])->name('all-product');

//  USER ALL PRODUCT DETAILS
Route::middleware(['auth:sanctum', 'verified'])->get('/all-product-details/{product_id}', [UserController::class, 'allProductDetails'])->name('all-product-details');

//  USER VIEW UNTAPPED PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/untapped-product', [UserController::class, 'untappedProducts'])->name('untapped-product');

//  USER VIEW ALI EXPRESS PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/ali-product', [UserExploreController::class, 'exploreAli'])->name('ali-product');

//  USER VIEW AMAZON PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/amz-product', [UserExploreController::class, 'exploreAmz'])->name('amz-product');

//  USER VIEW STORE PRODUCTS
Route::middleware(['auth:sanctum', 'verified'])->get('/store-product', [UserExploreController::class, 'exploreStore'])->name('store-product');

//  USER VIEW TUTORIAL
Route::middleware(['auth:sanctum', 'verified'])->get('/tutorial', [UserController::class, 'viewTutorial'])->name('tutorial');

//  USER VIEW FAQ
Route::middleware(['auth:sanctum', 'verified'])->get('/FAQ', [UserController::class, 'viewFAQ'])->name('FAQ');

//  USER VIEW CONTACT US
Route::middleware(['auth:sanctum', 'verified'])->get('/contact-us', [UserController::class, 'viewContactUs'])->name('contact-us');

//  USER SEND EMAIL
Route::middleware(['auth:sanctum', 'verified'])->post('/send-email', [ContactController::class, 'contact'])->name('send-email');

//  USER SEARCH
Route::middleware(['auth:sanctum', 'verified'])->post('/search-all-product', [UserController::class, 'allProduct'])->name('search');






//  FREELANCER PROFILE
Route::middleware(['auth:sanctum', 'verified'])->get('/profile', [FreelancerController::class, 'profile'])->name('profile');

//  FREELANCER UPDATE PROFILE
Route::middleware(['auth:sanctum', 'verified'])->get('/update-profile', [FreelancerController::class, 'updateProfile'])->name('update-profile');

//  FREELANCER UPDATE PASSWORD
Route::middleware(['auth:sanctum', 'verified'])->post('/update-password', [FreelancerController::class, 'updatePassword'])->name('update-password');

//  FREELANCER PRODUCT RESEARCH
Route::middleware(['auth:sanctum', 'verified'])->get('/product-research', [ProductController::class, 'productResearch'])->name('product-research');

//  FREELANCER VIEW PRODUCT-UPLOAD-PAGE
Route::middleware(['auth:sanctum', 'verified'])->get('/uploadPage', [ProductController::class, 'uploadPage'])->name('uploadPage');

//  FREELANCER UPLOAD PRODUCT
Route::post('/uploadProduct', [ProductController::class, 'uploadProduct'])->name('uploadProduct');

Route::post('/fileUpload', [FileUploadController::class, 'upload']);

// FREELANCER EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product-edit');

//  FREELANCER UPDATE PRODUCT
Route::post('/product-update', [ProductController::class, 'productUpdate'])->name('productUpdate');

// FREELANCER VIEW AMAZON EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/amazon-product-edit/{id}', [ProductController::class, 'amazonProductEdit'])->name('amazon-product-edit');

//  FREELANCER AMAZON UPDATE PRODUCT
Route::post('/amazon-product-update', [ProductController::class, 'amazonProductUpdate'])->name('amazon-product-update');

// FREELANCER VIEW ALI EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/ali-product-edit/{id}', [ProductController::class, 'aliProductEdit'])->name('ali-product-edit');

//  FREELANCER ALI UPDATE PRODUCT
Route::post('/ali-product-update', [ProductController::class, 'aliProductUpdate'])->name('ali-product-update');

// FREELANCER VIEW SHOPIFY EDIT PRODUCT
Route::middleware(['auth:sanctum', 'verified'])->get('/shopify-product-edit/{id}', [ProductController::class, 'shopifyProductEdit'])->name('shopify-product-edit');

//  FREELANCER SHOPIFY UPDATE PRODUCT
Route::post('/shopify-product-update', [ProductController::class, 'shopifyProductUpdate'])->name('shopify-product-update');

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



//  FRONT END

Route::get('/', function(){
    return view('front.index');
});

Route::get('/pricing', function(){
    return view('front.pricing');
});
Route::get('/privacy-policy', function(){
    return view('front.privacy-policy');
});
Route::get('/contact-us', function(){
    return view('front.contact-us');
});
Route::get('/about', function(){
    return view('front.about');
});
Route::get('/blog', function(){
    return view('front.blog');
});
Route::get('/our-team', function(){
    return view('front.about_our-team');
});
Route::get('/contact-us', function(){
    return view('front.contact-us');
});
Route::get('/refund-policy', function(){
    return view('front.refund-policy');
});

// END FRONT END