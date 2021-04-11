<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\freelancerController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/freelancer-dashboard', function () {
// 	if(Auth::check()){	
//     			return view('.index');
// 	}
    
// })->name('freelancer-dashboard');

Route::get('/freelancer-subsciption',[freelancerController::class, 'dashboard'])->name('freelancer-dashboard');

Route::get('/logout',[freelancerController::class, 'logoutFreelancer'])->name('logout');

Route::get('/work-report',[freelancerController::class, 'workReportFreelancer'])->name('work-report');

Route::get('/product-research',[freelancerController::class, 'productResearch'])->name('product-research');

Route::get('/message',[freelancerController::class, 'message'])->name('message');

Route::get('/myprofile',[freelancerController::class, 'myprofile'])->name('myprofile');


