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
            <h3>Trending Product Research</h3>
            <a type="button" class="btn btn-facebook-ads" href=""><i class="fas fa-video"></i> Tutorials</a>
          </div>
          <div class="col-12">
            <div class="input-group my-3">
              <input type="text" class="form-control fb-ads-input" placeholder="Type Product name or neach">
              <div class="input-group-append">
                <button class="btn btn-fb-ads-input" type="button" id="#">Search</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row mx-2">
          <div class="col-sm-12 col-md-6 col-lg-3 my-1">
            <select class="form-control select2">
              <option>All Categories</option>
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
            <select class="form-control select2">
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
            <select class="form-control">
              <option>Filter Products</option>
              <option>By Product Type</option>
              <option>By Price Over</option>
              <option>By Price Under</option>
              <option>By Found Date</option>
              <option>By Last added Date</option>
            </select>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 my-1">
            <select class="form-control">
              <option>Sort Produtcs</option>
              <option>By Stores Selling</option>
              <option>By Total Orders</option>
              <option>By Found Date</option>
              <option>By Last added Date</option>
            </select>
          </div>
        </div>
        <!-- /.row -->

        <div class="row mx-3 mt-3">
          <div class="card-deck">
@foreach($trendingProducts as $trendingProduct)
              <div class="card shadow">
                @foreach ($trendingProduct->productImage as $productImage)
                <div class="row px-2 video-icon">
                  <img src="{{$productImage->image_link_1}}" class="card-img-top img-fluid" alt="...">
                  <i class="fas fa-play-circle video-play-icon"></i>
                </div>
                @endforeach
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
                <div class="row mx-4 px-2 mb-2 justify-content-center rounded icon-btn">
                  <a href="{{url('product-details')}}" type="button" class="btn fb-ads-card-btn">View Product Details</a>
                </div>
              </div>    
@endforeach
            </div>
          </div>
        <!-- /.row -->
@endsection