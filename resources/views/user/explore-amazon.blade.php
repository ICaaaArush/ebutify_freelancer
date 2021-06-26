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
            <h3>Amazon Explorer</h3>
            <a type="button" class="btn btn-facebook-ads" href=""><i class="fas fa-video"></i> Tutorials</a>
          </div>
                    <form class="col-12" method="get" action="{{ route('amz-product') }}">
            <div class="col-12">
               <div class="input-group my-3">
                  <input type="text" class="form-control fb-ads-input" placeholder="Type Product name or niche" name="search">
                  <div class="input-group-append">
                     <button class="btn btn-fb-ads-input" type="submit" id="#">Search</button>
                  </div>
               </div>
            </div>
         </form>
        </div>
        <!-- /.row -->

                <form id="filterForm" method="get" action="{{ route('amz-product') }}">
                <div class="row mx-2">
                  <div class="col-lg-6"></div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2-no-search filter-item" name="filter" style="width: 100%;">
                           <option value="">Filter Products</option>
                           <option @if ($filterSelected == 1)
                                            selected="selected"
                                        @endif value="1">By Price under $30</option>
                           <option @if ($filterSelected == 2)
                                            selected="selected"
                                        @endif value="2">By Price Over $30</option>
                        </select>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2-no-search filter-item" name="sort" style="width: 100%;">
                           <option>Sort Produtcs</option>
                           <option @if ($sortSelected == 2)
                                            selected="selected"
                                        @endif value="2">By Total Orders</option>
                           <option @if ($sortSelected == 3)
                                            selected="selected"
                                        @endif value="3">By Last added Date</option>
                        </select>
                     </div>
                </div>
                </form>
        <!-- /.row -->

        <div class="row mx-3 mt-3">
          <div class="card-deck">
@foreach($trendingProducts as $trendingProduct)
<div class="col-md-4 mt-4">
            <div class="card shadow">
              @foreach ($trendingProduct->productImage as $productImage)
              <img src="{{$productImage->image_link_1}}" class="card-img-top img-fluid" alt="...">
              @endforeach
              <div class="row card-body px-2">
                <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                  <h5 class="card-title">{{$trendingProduct->product_name}}</h5>
                </div> 
                <div class="row mt-3">
                  <div class="col-12 text-center px-3">
                    <?php if ($trendingProduct->explore_star_rating >= 1) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating >= 2) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating >= 3) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating >= 4) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating == 5) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <span>{{$trendingProduct->explore_star_rating}}</span>
                  </div>
                  <div class="col-12 text-center px-3">
                    <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Total Order</span>
                    <span>{{$trendingProduct->total_order}}</span>
                  </div>
                  <div class="col-12 text-center px-3">
                    <span class="cae-cart-icon"><i class="fas fa-atom"></i> Selling Price</span>
                    <span>{{$trendingProduct->price}}</span>
                  </div>
                </div>
              </div>
              @foreach ($trendingProduct->ProductLink as $productLink)
              <div class="row mb-3 mx-1">
                <div class="col-6 text-center p-0">
                  <a href="{{$productLink->amazon}}" class="cae-view rounded px-2 py-1" style="color: #918C9B;"><i class="fab fa-amazon" style="background: #191919; color: #fff; font-size: 12px; padding: 2px; line-height: 13px;"></i> Amazon</a>
                </div>
                <div class="col-6 text-center p-0">
                  <a href="{{$productLink->aliexpress}}" class="cae-view rounded px-2 py-1" style="color: #918C9B;"><img src="{{asset('assets/img/aliExpress-logo.png')}}" style="width: 16px; padding-bottom: 5px;" alt=""> AliExpress</a>
                </div>
              </div>
              @endforeach
            </div>
</div>
@endforeach
          </div>
        </div>

        <!-- /.row -->
@endsection