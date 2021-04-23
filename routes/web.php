<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProductController;


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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', [FreelancerController::class, 'dashboard'])->name('freelancer-dashboard');

Route::get('/logout', [FreelancerController::class, 'logoutFreelancer'])->name('logout');

Route::get('/work-report', [FreelancerController::class, 'workReportFreelancer'])->name('work-report');

Route::get('/message', [FreelancerController::class, 'message'])->name('message');

Route::get('/myprofile', [FreelancerController::class, 'myprofile'])->name('myprofile');

Route::post('/subscribe', [FreelancerController::class,'subscribe'])->name('subscribe');

Route::get('/product-research', [ProductController::class, 'productResearch'])->name('product-research');

Route::get('/uploadPage', [ProductController::class, 'uploadPage'])->name('uploadPage');

Route::post('/uploadProduct', [ProductController::class, 'uploadProduct'])->name('uploadProduct');

Route::get('/product-edit/{id}', [ProductController::class, 'productEdit'])->name('product-edit');

Route::post('/product-update', [ProductController::class, 'productUpdate'])->name('productUpdate');

Route::post('/product-update', [ProductController::class, 'productUpdate'])->name('productUpdate');

Route::post('/user-register', [UserController::class, 'userRegister']);