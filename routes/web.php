<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelancerController;

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
Route::get('/payment',[FreelancerController::class, 'payment'])->name('premium');

Route::get('/freelancer-dashboard',[FreelancerController::class, 'dashboard'])->name('freelancer-dashboard');

Route::get('/logout',[FreelancerController::class, 'logoutFreelancer'])->name('logout');

Route::get('/work-report',[FreelancerController::class, 'workReportFreelancer'])->name('work-report');

Route::get('/product-research',[FreelancerController::class, 'productResearch'])->name('product-research');

Route::get('/message',[FreelancerController::class, 'message'])->name('message');

Route::get('/myprofile',[FreelancerController::class, 'myprofile'])->name('myprofile');

Route::post('/subscribe',[FreelancerController::class,'subscribe'])->name('subscribe');

// Route::get('/payment',[FreelancerController::class, 'payment'])->name('payment');

