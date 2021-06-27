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
use ZipArchive;
use File;

class UserExploreController extends Controller
{
    public function exploreAli(Request $request)
    {
        if(Auth::check()){
            $sortSelected = 0;
            $filterSelected = 0;
            $categorySelected = 0;
        //-- HANDLE SORTING
        if($request->sort) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
            case 1:
                $orderColumn = 'profit';
            break;
            case 2:
                $orderColumn = 'total_order';
            break;
            case 3:
                $orderColumn = 'created_at';
            break;
            case 4:
                $orderColumn = 'total_order';
            break;
            case 5:
                $orderColumn = 'total_order';
            break;
            default:
                $orderColumn = 'product_name';
            break;        
            }
            
        }else{
            $orderColumn = 'created_at';
        }
        
        //-- HANDLE FILTER
        if($request->filter) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
            case 1:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('price', '<=' ,'30')->orderBy($orderColumn,'DESC')->paginate(5);
                // dd($trendingProducts);
            break;
            case 2:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(5);
            break;
            case 3:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('profit', '>=' , '15')->orderBy($orderColumn,'DESC')->paginate(5);
            break;
            case 4:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('profit', '<=' , '15')->orderBy($orderColumn,'DESC')->paginate(5);
            break;
            default:
                $filterBy = 'product_name';
            break;        
            }
        }else{

        }

        if($request->search) {
            // dd($request->search);
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->where('product_name', 'LIKE', '%'.$request->search.'%')->orderBy($orderColumn,'DESC')->paginate(5);
        }
        if (empty($trendingProducts)) {
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->orderBy($orderColumn,'DESC')->paginate(5);
        }

        $results = ProductDetail::orderBy('id')->paginate(9);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $artilces.=
                '<div class="col-md-4 mt-4" style="box-sizing: border-box; flex-flow: row wrap; margin: auto;">
                    <div class="card shadow">
                      <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="...">
                      <div class="row card-body px-2">
                        <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                          <h5 class="card-title">'.$result->product_name.'</h5>
                        </div> 
                        <div class="row mt-3">
                          <div class="col-12 text-center px-3">
                            <?php if ($result->explore_star_rating >= 1) { ?>
                              <span class="fa fa-star checked"></span>
                            <?php } else { ?>
                              <span class="fa fa-star"></span>
                            <?php } ?>
                            <?php if ($result->explore_star_rating >= 2) { ?>
                              <span class="fa fa-star checked"></span>
                            <?php } else { ?>
                              <span class="fa fa-star"></span>
                            <?php } ?>
                            <?php if ($result->explore_star_rating >= 3) { ?>
                              <span class="fa fa-star checked"></span>
                            <?php } else { ?>
                              <span class="fa fa-star"></span>
                            <?php } ?>
                            <?php if ($result->explore_star_rating >= 4) { ?>
                              <span class="fa fa-star checked"></span>
                            <?php } else { ?>
                              <span class="fa fa-star"></span>
                            <?php } ?>
                            <?php if ($result->explore_star_rating == 5) { ?>
                              <span class="fa fa-star checked"></span>
                            <?php } else { ?>
                              <span class="fa fa-star"></span>
                            <?php } ?>
                            <span>'.$result->explore_star_rating.'</span>
                          </div>
                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Total Order</span>
                            <span>'.$result->total_order.'</span>
                          </div>
                          
                          <div class="col-12 text-center px-3">
                            <span class="cae-cart-icon"><i class="fas fa-atom"></i> Selling Price</span>
                            <span>'.$result->price.'</span>
                          </div>
                        </div>
                      </div>
                      <div class="row px-2 mb-2 rounded justify-content-center">
                        <a href="'.$result->productLink[0]->aliexpress.'" class="cae-view"><img src="{{asset(\'assets/img/aliExpress-logo.png\')}}" class="img-fluid" style="width: 16px; margin: 5px;" alt=""> View on a Demo</a>
                      </div>
                    </div>
                </div>';
            }
            return $artilces;
        }


            
        // $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%ali_express%')->get();

        // dd( $trendingProducts );

        foreach ($trendingProducts as $trendingproduct) {
            $country = $trendingproduct->country.",";
        }

            if (empty($country)) {

                return view('user.explore-ali',compact('trendingProducts','sortSelected','filterSelected'));

            }else{
                // dd($sortSelected);
                return view('user.explore-ali',compact('trendingProducts','country','sortSelected','filterSelected'));
            }

        }else{

        return view('auth.login');

        }
    }

    public function exploreAmz(Request $request)
    {
        if(Auth::check()){
        $sortSelected = 0;
        $filterSelected = 0;
        $categorySelected = 0;
        
        //-- HANDLE SORTING
        if($request->sort) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->sort){
            case 1:
                $orderColumn = 'profit';
            break;
            case 2:
                $orderColumn = 'total_order';
            break;
            case 3:
                $orderColumn = 'created_at';
            break;
            case 4:
                $orderColumn = 'total_order';
            break;
            case 5:
                $orderColumn = 'total_order';
            break;
            default:
                $orderColumn = 'product_name';
            break;        
            }
            
        }else{
            $orderColumn = 'created_at';
        }
      
        //-- HANDLE FILTER
        if($request->filter) {
            $sortSelected = $request->sort;
            $filterSelected = $request->filter;
            $categorySelected = $request->category;
          switch($request->filter){
            case 1:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('price', '<=' ,'30')->orderBy($orderColumn,'DESC')->paginate(5);
                // dd($trendingProducts);
            break;
            case 2:
                $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('price', '>=' , '30')->orderBy($orderColumn,'DESC')->paginate(5);
            break;
            default:
                $filterBy = 'product_name';
            break;        
            }
        }else{

        }

        if($request->search) {
            // dd($request->search);
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->where('product_name', 'LIKE', '%'.$request->search.'%')->orderBy($orderColumn,'DESC')->paginate(5);
        }
        if (empty($trendingProducts)) {
            $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->orderBy($orderColumn,'DESC')->paginate(5);
        }



        // $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%amazon%')->get();

        // dd( $trendingProducts );

        foreach ($trendingProducts as $trendingproduct) {
            $country = $trendingproduct->country.",";
        }

            if (empty($country)) {

                return view('user.explore-amazon',compact('trendingProducts','sortSelected','filterSelected'));

            }else{

                return view('user.explore-amazon',compact('trendingProducts','country','sortSelected','filterSelected'));
            }

        }else{

        return view('auth.login');

        }
    }

    public function exploreStore()
    {
        if(Auth::check()){
            
        $trendingProducts = ProductDetail::where('explore_pro_type', 'LIKE' ,'%shopify%')->get();

        // dd( $trendingProducts );

        foreach ($trendingProducts as $trendingproduct) {
            $country = $trendingproduct->country.",";
        }

            if (empty($country)) {

                return view('user.explore-store',compact('trendingProducts'));

            }else{

                return view('user.explore-store',compact('trendingProducts','country'));
            }

        }else{

        return view('auth.login');

        }
    }
}
