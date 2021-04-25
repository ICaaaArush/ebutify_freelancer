<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductLink;
use App\Models\ProductType;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Country;


class UserController extends Controller
{
    public function trendingProducts()
	 {
	 	if(Auth::check()){
			
		$trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%trending_product%')->get();

		// dd( $trendingProducts );
		$rows = round(count($trendingProducts)/4);
		// dd($rows);

		return view('user.trending',compact('trendingProducts','rows'));

		}else{

	 	return view('auth.login');

	 	}
	 }

    public function downloadGIF($gifs)
    {
    	echo $gifs;
    	$array = explode(',', $gifs);
    	dd($array);
    	$sortedGifs = $gifs.split(',');
    	echo $sortedGifs;
    }
}
