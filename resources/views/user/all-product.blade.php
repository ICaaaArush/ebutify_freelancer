@extends('layoutsUser.user3')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="customer-product-research-dashboard.html">Product Research Tool</a>
        <a class="nav-link " href="customer-ebutify-services-dashboard.html">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row mx-2 my-3">
          <div class="col-12 facebook-ads-header d-flex justify-content-between">
            <h3>All Product Research</h3>
            <a type="button" class="btn btn-facebook-ads" href=""><i class="fas fa-video"></i> Tutorials</a>
          </div>
          <form class="col-12" method="get" action="{{ route('all-product') }}">
            <div class="col-12">
               <div class="input-group my-3">
                  <input type="text" class="form-control fb-ads-input" placeholder="Type Product name or neach" name="search">
                  <div class="input-group-append">
                     <button class="btn btn-fb-ads-input" type="submit" id="#">Search</button>
                  </div>
               </div>
            </div>
         </form>
        </div>
        <!-- /.row -->

        <form id="filterForm" method="get" action="{{ route('all-product') }}">
          <div class="row mx-2">
             <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                <select class="form-control select2 filter-item" name="category">
                   <option value="">All Categories</option>
                   <option value="1">Women's Fashion</option>
                   <option value="2">Man's Fashion</option>
                   <option value="3">Health & Beauty</option>
                   <option value="4">Home Improvement</option>
                   <option value="5">Garden Improvement</option>
                   <option value="6">Pet Accessories</option>
                   <option value="7">Electronics</option>
                   <option value="8">Computer Accessories</option>
                   <option value="9">Baby & Kids</option>
                   <option value="10">Kitchen & household</option>
                   <option value="11">Jewellery</option>
                   <option value="12">Car Accessories</option>
                   <option value="13">Bike Accessories</option>
                   <option value="14">Mobile Accessories</option>
                   <option value="15">Fitness</option>
                   <option value="16">Bag's & Shoes</option>
                   <option value="17">Outdoor</option>
                   <option value="18">Beauty Hair</option>
                </select>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                <select class="form-control select2 filter-item" name="niche">
                   <option>All Niches</option>
                   <option>Health & Beauty</option>
                   <option>Home & Garden</option>
                   <option>Pet Accessories</option>
                   <option>Electronics</option>
                   <option>Baby & Kids</option>
                   <option>Kitchen & household</option>
                   <option>Outdoor</option>
                </select>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                <select class="form-control select2-no-search filter-item" name="filter" style="width: 100%;">
                   <option>Filter Products</option>
                   <option value="1">By Price under $30</option>
                   <option value="2">By Price Over $30</option>
                   <option value="3">By Profit Over $15</option>
                   <option value="4">By Cost under $20</option>
                </select>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                <select class="form-control select2-no-search filter-item" name="sort" style="width: 100%;">
                   <option>Sort Produtcs</option>
                   <option value="1">By Profit</option>
                   <option value="2">By Total Orders</option>
                   <option value="3">By Last added Date</option>
                   <option value="4">By Image</option>
                   <option value="5">By Video</option>
                </select>
             </div>
          </div>
        </form>





        <div class="row mx-3 mt-3">
          <div class="card-deck">
@foreach($trendingProducts as $trendingProduct)
<div class="col-md-4 mt-4">
              <div class="card shadow" style="min-width: 280px;">
                <!-- @foreach ($trendingProduct->productImage as $productImage) -->
                <div class="row px-2 video-icon">
                  <img src="{{$trendingProduct->productImage[0]->image_link_1}}" class="card-img-top img-fluid" alt="...">
                  <i class="fas fa-play-circle video-play-icon"></i>
                </div>
                <!-- @endforeach -->
                <div class="row card-body px-2">
                  <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                    <h5 class="card-title">{{$trendingProduct->product_name}}</h5>
                  </div>
                  <div class="col-12 px-3">
                    <div class="row">
                      <div class="col-7">
                        <span>Order</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>{{$trendingProduct->total_order}}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Product Cost</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>${{$trendingProduct->cost}}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Selling Price</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>${{$trendingProduct->price}}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Profit Margin</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>${{$trendingProduct->profit}}</span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Total Sales</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>${{$trendingProduct->total_revenue}}</span>
                      </div>
                    </div>
                  </div>
                </div>
<?php $product_id = $trendingProduct->id ?>
                <div class="row mx-4 px-2 mb-2 justify-content-center rounded icon-btn">
                  <a href="{{route('all-product-details',[$product_id])}}" type="button" class="btn fb-ads-card-btn">View Product Details</a>
                </div>
              </div>
</div>
@endforeach
          </div>
        </div>

        <!-- /.row -->
@endsection
@section('js')
<script type="text/javascript">
         $(document).on("change", ".filter-item", function(){
           console.log("sorting updated...");
           $('#filterForm').submit();
         });

         $(document).on("scroll", function(){
           console.log("you scrolled...");
           console.log(window.scrollY);
           if(window.scrollY >=1200)
           {
               //-- fetch data with ajax
               
               //-- feed current data container
           }
         });
</script>
@endsection