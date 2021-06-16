<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>eButify | Facebook Ads Research</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">
      <!-- Select2 -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
      <!-- Slick Slider -->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
      <!-- My style -->
      <link rel="stylesheet" href="assets/css/style.css">
      <style type="text/css">
         #modal_demo {
         left: 0px;
         top: 0px;
         right: 0px;
         bottom: 0px;
         margin: auto;
         width: 100%;
         height: 100%;
         text-align: center;
         z-index: 10000;
         }
      </style>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
      <div class="wrapper">
      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
         <img class="animation__wobble" src="assets/img/eButify.png" alt="eButifyLogo">
      </div>
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link primary-color" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
         </ul>
         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
               <a class="nav-link primary-color" data-toggle="dropdown" href="#">
               <i class="far fa-bell"></i>
               <span class="badge badge-warning navbar-badge">3</span>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">3 Notifications</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 1 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 1 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 1 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
               </div>
            </li>
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
               <a class="nav-link primary-color" data-toggle="dropdown" href="#">
               <i class="far fa-envelope"></i>
               <span class="badge badge-danger navbar-badge">4</span>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                        <img src="assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                           <h3 class="dropdown-item-title">
                              Brad Diesel
                              <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                           </h3>
                           <p class="text-sm">Call me whenever you can...</p>
                           <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                     </div>
                     <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                        <img src="assets/img/avatar2.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                           <h3 class="dropdown-item-title">
                              John Pierce
                              <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                           </h3>
                           <p class="text-sm">I got your message bro</p>
                           <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                     </div>
                     <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <!-- Message Start -->
                     <div class="media">
                        <img src="assets/img/avatar.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                           <h3 class="dropdown-item-title">
                              Nora Silvester
                              <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                           </h3>
                           <p class="text-sm">The subject goes here</p>
                           <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                     </div>
                     <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="" data-toggle="dropdown" href="#">
                  <div class="user-panel d-flex mr-3">
                     <div class="image">
                        <img src="assets/img/user1-128x128.jpg" class="img-circle " alt="Jone Due">
                     </div>
                  </div>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-item dropdown-header">Jone Due</span>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <a href="customer-profile-page.html" class="dropdown-item">
                  <i class="far fa-user mr-2"></i> My Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="customer-subscriptions-billing.html" class="dropdown-item">
                  <i class="far fa-bell mr-2"></i> Subcription
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-primary">
         <!-- Brand Logo -->
         <a href="" class="brand-link">
         <img src="assets/img/eButify.png" alt="e/Butify Logo" class="brand-image" style="opacity: .8">
         </a>
         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                  <li class="nav-item">
                     <a href="{{url('dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                           Product Research
                           <i class="right fas fa-angle-right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview pl-4 ml-2">
                        <li class="nav-item">
                           <a href="customer-facebook-ads-research.html" class="nav-link active">
                              <i class="nav-icon fab fa-facebook-square"></i>
                              <p>Facebook Ads</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{route('untapped-product')}}" class="nav-link">
                              <i class="nav-icon fas fa-upload"></i>
                              <p>Untapped Products</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="{{url('trending-products')}}" class="nav-link">
                              <i class="nav-icon fas fa-vector-square"></i>
                              <p>Trending Products</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="customer-all-product-research.html" class="nav-link">
                              <i class="nav-icon fab fa-adn"></i>
                              <p>All Products</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                           Explores
                           <i class="fas fa-angle-right right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview pl-4 ml-2">
                        <li class="nav-item">
                           <a href="customer-ali-exprees-explore.html" class="nav-link">
                              <img src="assets/img/ali.png" style="width: 16px; margin-bottom: 6px;" alt="">
                              <p>AliExpress Explore</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="customer-amazon-explore.html" class="nav-link">
                              <img src="assets/img/amz.png" style="width: 16px; margin-bottom: 6px;" alt="">
                              <p>Amazon Explore</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="customer-store-explore.html" class="nav-link">
                              <img src="assets/img/shp.png" style="width: 18px; margin-bottom: 6px;" alt="">
                              <p>Store Explore</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                           Help
                           <i class="fas fa-angle-right right"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview pl-4 ml-2">
                        <li class="nav-item">
                           <a href="customer-help-tutorial.html" class="nav-link">
                              <i class="nav-icon fas fa-video"></i>
                              <p>Tutorials</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="customer-FAQ.html" class="nav-link">
                              <i class="nav-icon fas fa-comment-dots"></i>
                              <p>FAQ</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="customer-contact-us.html" class="nav-link">
                              <i class="nav-icon fas fa-user-tag"></i>
                              <p>Contact Us</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <br>
                  <li class="nav-item">
                     <p>QUICK LINKS</p>
                  </li>
                  <li class="nav-item">
                     <a href="customer-help-tutorial.html" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>Tutorials</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="customer-FAQ.html" class="nav-link">
                        <i class="nav-icon fas fa-comment-dots"></i>
                        <p>FAQ</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="customer-contact-us.html" class="nav-link">
                        <i class="nav-icon fas fa-user-tag"></i>
                        <p>Contact Us</p>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>
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
                     <h3>Untapped Product Research</h3>
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
                     <select class="form-control select2-no-search" style="width: 100%;">
                        <option>Filter Products</option>
                        <option>By Product Type</option>
                        <option>By Price Over</option>
                        <option>By Price Under</option>
                        <option>By Found Date</option>
                        <option>By Last added Date</option>
                     </select>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                     <select class="form-control select2-no-search" style="width: 100%;">
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
                     
<?php $j = 1; ?>
@if ($trendingProducts->count() == 0)
<div class="justify-content-center" >

   <p class="justify-content-center" style="text-align: center;">No products to display.</p>

</div>
@endif

@foreach($trendingProducts as $trendingProduct)
                     <div class="card shadow">
                        <div class="row px-2" data-toggle="modal" data-target="#modal_demo{{$j}}">
                           @foreach ($trendingProduct->productImage as $productImage)
                           <div class="col-12 p-0 video-icon">
                              <img src="{{$productImage->image_link_1}}" class="card-img-top img-fluid" alt="..." style="max-height:300px;">
                              <i class="fas fa-play-circle video-play-icon"></i>
                           </div>
                           @endforeach
                           <div class="col-12 mt-4 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                              <h5 class="card-title">{{$trendingProduct->product_name}}</h5>
                           </div>
                        </div>
                        <div class="row card-body pt-0 px-2">
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
                        <div class="row mx-4 px-2 mb-2 rounded justify-content-between icon-btn">
                           <a href="" class="fb-ads-card-footer"><img src="{{asset('assets/img/fb-2.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="" class="fb-ads-card-footer"><img src="{{asset('assets/img/ali.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="" class="fb-ads-card-footer"><img src="{{asset('assets/img/amz.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="" class="fb-ads-card-footer"><img src="{{asset('assets/img/shp.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="" class="fb-ads-card-footer"><i class="fab fa-youtube" style="color: #FF0000; font-size: 26px;margin: 0 5px;"></i></a>
                        </div>
                        <div class="modal fade" id="modal_demo{{$j}}" tabindex="-1" role="dialog" aria-labelledby="modal_demo{{$j}}" aria-hidden="true">
                           <div class="modal-dialog" role="document" style="max-width:80%; margin: auto;">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title pl-2" id="UntappedModalLabel">{{$trendingProduct->product_name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 @php
                                    $date1 = new DateTime("now");

                                    $date2 = date_create($trendingProduct->created_at);

                                    $diff = date_diff($date1,$date2);

                                    $month = $diff->m;                 
                                    $day = $diff->d;                 
                                    $hour = $diff->h;
                                    $minute = $diff->i;
                                 @endphp
                                 <div class="row uptapped-active-found">
                                    <p>Found {{$diff->m}} Month {{$diff->d}} Days {{$diff->h}} Hours {{$diff->i}} Minutes ago</p>
                                 </div>
                                 <div class="modal-body untapped-p-modal pt-1">
                                    <div class="row pt-2">
                                       <div class="col-lg-4">
                                          <div class="row mx-1 mb-4">
                                             @foreach ($trendingProduct->productImage as $productImage)
                                             <div class="col-12">
                                                
                                                <div class="slickslider">
                                                   <div>
                                                      <div class="product-video-container embed-responsive embed-responsive-16by9">
                                                         <i class="fas fa-play-circle video-icon-play"></i>
                                                         <i class="fas fa-pause-circle video-icon-pause" style="display: none;"></i>
                                                         <video id="video-control">
                                                            <source src="{{$productImage->video_link}}" type="video/mp4">
                                                         </video>
                                                      </div>
                                                   </div>
                                                   <div>
                                                      <img src="{{$productImage->image_link_1}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{$productImage->image_link_2}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{$productImage->image_link_3}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{$productImage->image_link_4}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{$productImage->image_link_5}}" class="img-fluid" alt="">
                                                   </div>
                                                </div>
                                                <div class="slider-nav my-3">
                                                   <img src="{{$productImage->video_link}}" alt="">
                                                   <img src="{{$productImage->image_link_1}}" alt="">
                                                   <img src="{{$productImage->image_link_2}}" alt="">
                                                   <img src="{{$productImage->image_link_3}}" alt="">
                                                   <img src="{{$productImage->image_link_4}}" alt="">
                                                   <img src="{{$productImage->image_link_5}}" alt="">
                                                </div>

                                             </div>
                                             @endforeach

                                          </div>
                                       </div>
                                       <div class="col-lg-8">
                                          <div class="row mx-1">
                                             <div class="col-12">
                                                <div class="shadow bg-white rounded">
                                                   <table class="table table-borderless untapped-p-table table-responsive">
                                                      <thead>
                                                         <tr>
                                                            <th>Order</th>
                                                            <th>Product Cost</th>
                                                            <th>Selling Price</th>
                                                            <th>Profit</th>
                                                            <th>Total Sales</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <th>{{$trendingProduct->total_order}}</th>
                                                            <th>${{$trendingProduct->cost}}</th>
                                                            <th>${{$trendingProduct->price}}</th>
                                                            <th>${{$trendingProduct->profit}}</th>
                                                            <th>${{$trendingProduct->total_revenue}}</th>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="shadow bg-white rounded p-3">
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <div class="row pl-2 selling-sc">
                                                            <p>Selling on 12 Shopify store</p>
                                                         </div>
                                                         <div class="row selling-store">
                                                            @foreach ($trendingProduct->ProductLink as $productLink)
                                                            <div class="col-12">
                                                               <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt="" ><a href="{{$productLink->competitor_link_1}}">@php
                                                         $address = $productLink->competitor_link_1;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a></p>
                                                               <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt=""><a href="{{$productLink->competitor_link_2}}"> @php
                                                         $address = $productLink->competitor_link_2;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a></p>
                                                               <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt=""><a href="{{$productLink->competitor_link_3}}">
                                                         @php
                                                         $address = $productLink->competitor_link_3;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a></p>
                                                               <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt=""><a href="{{$productLink->competitor_link_4}}">
                                                         @php
                                                         $address = $productLink->competitor_link_4;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a></p>
                                                               <!-- <a href="">+39 more stores</a> -->
                                                            </div>
                                                         @endforeach
                                                         </div>
                                                      @php
                                                      $countrys = $trendingProduct->country;
                                                      $countrys = explode(',', $countrys);
                                                      @endphp
                                                      </div>
                                                      <div class="col-md-6 selling-country pl-3">
                                                         <div class="row pl-2 selling-sc">
                                                            <p>Selling Country</p>
                                                         </div>
                                                         <div class="row selling-store">
                                                            <div class="col-12">
                                                               @foreach($countrys as $country)
                                                               <p><img src="assets/img/web-path.png" style="width: 20px; margin-top: -6px;" alt="">{{$country}}</p>
                                                               @endforeach
                                                               <!-- <a href="">+5 more Country's</a> -->
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row mt-4">
                                       <div class="col-lg-4">
                                          <div class="row mx-2">
                                             <div class="col-12 shadow bg-white border-rounded mb-4">
                                                <ul class="list-group list-group-flush py-3 list-unstyled prm-list">
                                                   <li><a class="list-group-item rounded my-1" href="#" role="tab"><i class="fas fa-store-alt"></i> Visit Competitor Store</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="#" role="tab"><img src="assets/img/ali.png" style="width: 12px; margin-bottom: 2px;" alt=""> Visit AliExpress Source</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="#" role="tab"><i class="fab fa-amazon"></i> View Product On Amazon</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="#" role="tab"><i class="fab fa-ebay"></i> View Product On eBay</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="#" role="tab"><i class="fab fa-facebook"></i> View Facebook Ads</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="#" role="tab"><i class="fab fa-youtube"></i> View YouTube Review</a></li>
                                                </ul>
                                                <div class="slider2">
                                                   <div>
                                                      <img src="assets/img/11.jpg" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="assets/img/22.jpg" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="assets/img/33.jpg" class="img-fluid" alt="">
                                                   </div>
                                                </div>
                                                <div class="slider-nav2 my-2 justify-content-between">
                                                   <img src="assets/img/11.jpg" class="img-fluid" alt="">
                                                   <img src="assets/img/22.jpg" class="img-fluid" alt="">
                                                   <img src="assets/img/33.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="mb-2 float-right">
                                                   <p class="d-inline-block" style="font-size: 13px;">Download Gif Images</p>
                                                   <input type="button" id="download" class="btn-download" value="download">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-lg-8 tab-content">
                                          <div class="row mb-2 mx-2">
                                             <div class="tab-pane fade show active" role="tabpanel">
                                                <ul class="nav nav-tabs modal-tab nav-justified shadow" role="tablist">
                                                   <li class="nav-item plan-tab" role="presentation">
                                                      <a class="nav-link active" data-toggle="tab" href="#pd1" style="font-size: 13px;" role="tab">Product Description</a>
                                                   </li>
                                                   <li class="nav-item plan-tab" role="presentation">
                                                     <!--  <a class="nav-link nav-link-show-1" data-toggle="tab" href="#far1" style="font-size: 13px;" role="tab">Facebook Audience Research</a>
                                                      <a class="nav-link nav-link-show-2" data-toggle="tab" href="#far1" style="font-size: 13px;" role="tab">Fb Audience Research</a> -->
                                                   </li>
                                                </ul>
                                                <div class="tab-content pr-modal-tab bg-white shadow">
                                                   <div class="tab-pane fade show active pb-3" id="pd1" role="tabpanel">
                                                      <div class="row mx-3 pt-3 plan-header">
                                                         <p><?php echo $trendingProduct->description;?>
                                                         </p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-12 modal-footer px-0 mt-2">
                                          <button type="button" class="btn btn-modal-cancel" data-dismiss="modal">Cancel</button>
                                          <a href="" type="button" class="btn btn-modal-product">View Product</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
<?php $j++; ?>
@endforeach
                  </div>
               </div>


               <footer>
                  <div class="row justify-content-center my-4">
                     <copyright>&copy; 2020 - 2021 eButify Inc. All rights reserved</copyright>
                  </div>
               </footer>
            </div>
            <!--/. container-fluid -->
         </section>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <div class="modal fade " id="Untapped-pro-Modal" tabindex="-1" aria-labelledby="UntappedModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content ">
               <h2 class="text-center my-5">Loading...</h2>
            </div>
         </div>
      </div>
      <!-- ./wrapper -->
      <!-- REQUIRED SCRIPTS -->
      <!-- jQuery -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <!-- Bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>
      <!--Select2 from-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
      <script src="assets/js/script.js"></script>
      <script>
         $(document) .ready(function(){
          $('.select2').select2({
            width: '100%'
          });
          $('.select2-no-search').select2({
            minimumResultsForSearch: -1
          });
          
         
          $('#Untapped-pro-Modal').on('shown.bs.modal', function () {
            $('#Untapped-pro-Modal .modal-content').html('<h2 class="text-center my-5">Loading...</h2>');
            $.get('ajax/product-research-modal.html', function(modalData){
              $('#Untapped-pro-Modal .modal-content').html(modalData);
            });        
          });
          $('#Untapped-pro-Modal').on('hide.bs.modal', function () {
            $('#Untapped-pro-Modal .modal-content').html('<h2 class="text-center my-5">Loading...</h2>');
          });
         
         });
      </script>
      <script>
         function videoPlay(){
           $('#video-control').trigger('play');
           $('.video-icon-play').hide();
           $('.video-icon-pause').show();
         }
         function videoPause() {
           $('#video-control').trigger('pause');
           $('.video-icon-play').show();
           $('.video-icon-pause').hide();
         }
         $('.slickslider').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           fade: true,
           asNavFor: '.slider-nav'
         });
         $('.slider-nav').slick({
           slidesToShow: 5,
           slidesToScroll: 1,
           arrows: false,
           asNavFor: '.slickslider',
           //centerMode: true,
           focusOnSelect: true
         });
         $('.slickslider').on('afterChange', function(event, slick, currentSlide, nextSlide){
           videoPause();
         });
         $('.video-icon-play').click(function(){
           videoPlay();
         });
         $('.video-icon-pause').click(function(){
           videoPause();
         });
         $('.slider2').slick({
           slidesToShow: 1,
           slidesToScroll: 1,
           arrows: false,
           fade: true,
           asNavFor: '.slider-nav2'
         });
         $('.slider-nav2').slick({
           slidesToShow: 3,
           slidesToScroll: 1,
           arrows: false,
           asNavFor: '.slider2',
           //centerMode: true,
           focusOnSelect: true
         });
      </script>
   </body>
</html>