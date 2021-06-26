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
            <h3>Shopify Store Explorer</h3>
            <a type="button" class="btn btn-facebook-ads" href=""><i class="fas fa-video"></i> Tutorials</a>
          </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
<?php $j=0 ?>
<?php $k=0 ?>
<?php $savior = 0; ?>
@for($i=0; $i < count($trendingProducts)/4; $i++)
        <div class="row cse-main-body p-3 m-3">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row cse-content-header">
              @foreach($trendingProducts[$j]->ProductLink as $productLink)
              <?php $j = $j+4 ?>
              <div class="col-lg-2 col-md-2 col-sm-6">
                <a href="{{$productLink->aliexpress}}" style="color: #17a2b8;"><i class="fas fa-shopping-bag" style="color: #DC143C;"></i>
                      @php
                      $address = $productLink->aliexpress;
                      $split = explode("com",$address);
                      @endphp
                      {{$split[0]}}com...</a>
                <a href="" class="cse-see-link-2 float-right" style="color: #17a2b8;">See all <i class="fas fa-chevron-right"></i></a>
              </div>
              @endforeach
              <div class="col-lg-2 col-md-2 cse-hide">
                <span><strong>Traffic:</strong>{{$trendingProducts[$k]->monthly_traffic}}M/month</span>
              </div>
              
              <div class="col-lg-2 col-md-2 cse-hide">
                <span>Tech Spend: {{$trendingProducts[$k]->ads_spend}}K/mo</span>
              </div>
              
              <div class="col-lg-2 col-md-2 cse-hide">
                <span>Tracking {{$trendingProducts[$k]->running_ads}} <i class="fab fa-facebook-f" style="color: #3B5998;"></i> </span>
              </div>
              
              <div class="col-lg-2 col-md-2 cse-social-media-icon cse-hide">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-youtube"></i>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 show-right">
                <a href="" class="cse-see-link-1" style="color: #17a2b8;">See all <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row pt-3">
              <?php $k = $k+4 ?>
              @for($q=0; $q < 4; $q++)
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  
                  @foreach($trendingProducts[$savior]->productImage as $productImage)
                  <div class="col-6 my-2">
                    <img src="{{$productImage->image_link_1}}" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  @endforeach
                  
                  <div class="col-6 my-2">
                    <a href="" style="font-size: 17px; color: #B1B1B1;">{{$trendingProducts[$savior]->product_name}}</a>
                    
                    <p style="font-size: 13px;">Price: ${{$trendingProducts[$savior]->price}}</p>
                    <a href="" class="cse-link"><img src="{{asset('assets/img/ali.png')}}" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>
              <?php $savior++; ?>
              @endfor


            </div>
          </div>
        </div>
@endfor
</div>
@endsection

@section('js')
<script>
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
    $('.select2-no-search').select2({
      minimumResultsForSearch: -1
    });

  });
</script>
@endsection