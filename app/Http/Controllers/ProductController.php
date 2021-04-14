<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use App\Models\ProductLink;
use App\Models\ProductType;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Country;


class ProductController extends Controller
{

    public function productResearch()
    {
    	$productDetails = ProductDetail::paginate(10);;
    	// foreach ($productDetails as $productDetail) {


    		// //	FOR PRODUCT NAME
    		// echo "Product Name: ".$productDetail->product_name;

    		// $productTypes = $productDetail->ProductType;

    		// echo "<br>";

    		// //	FOR PRODUCT TYPE
    		// echo "Product Type: ".$productTypes->product_type;

    		// echo "<br>";

    		// $productGender = $productDetail->Gender;

    		// echo "Product Gender: ".$productTypes->gender;
    		
    		// echo "<br>";


    		// echo "<br>";
    		// echo "<br>";


    	// }
        return view('freelancer.product-research', compact('productDetails'));
    }

}
