<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eButify | View Product Details (Modal)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">
  <!-- Select2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <!-- My style -->
  <link rel="stylesheet" href="assets/css/style.css">

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
            <a href="customer-product-research-dashboard.html" class="nav-link">
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
                <a href="customer-facebook-ads-research.html" class="nav-link">
                  <i class="nav-icon fab fa-facebook-square"></i>
                  <p>Facebook Ads</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-untapped-product-research.html" class="nav-link">
                  <i class="nav-icon fas fa-upload"></i>
                  <p>Untapped Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-trending-product-research.html" class="nav-link active">
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
        <div class="modal-header">
          <h5 class="modal-title pl-2" id="UntappedModalLabel">Product Title: Lorem Ipsum is simply dummy</h5>
        </div>
        <div class="row uptapped-active-found">
            <p>Found 2 Month 3 Days 20 min ago</p>
        </div>
        <div class="modal-body veiw-detail-modal pt-1">
          <div class="row pt-2">
            <div class="col-lg-4">
              <div class="row mx-1 mb-4">
                <div class="col-12">
                  <div class="slickslider">
                    <div>
                        <div class="product-video-container embed-responsive embed-responsive-16by9">
                            <i class="fas fa-play-circle video-icon-play"></i>
                            <i class="fas fa-pause-circle video-icon-pause" style="display: none;"></i>
                            <video id="video-control">
                            <source src="assets/videos/TAKI TAKI  DJ.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                  <div>
                    <img src="assets/img/11.jpg" class="img-fluid" alt="">
                  </div>
                  <div>
                    <img src="assets/img/66.jpg" class="img-fluid" alt="">
                  </div>
                  <div>
                    <img src="assets/img/22.jpg" class="img-fluid" alt="">
                  </div>
                  <div>
                    <img src="assets/img/33.jpg" class="img-fluid" alt="">
                  </div>
                  <div>
                    <img src="assets/img/44.jpg" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="slider-nav mt-1">
                    <img src="assets/img/video-thamb.png" alt="">
                    <img src="assets/img/11.jpg" alt="">
                    <img src="assets/img/66.jpg" alt="">
                    <img src="assets/img/22.jpg" alt="">
                    <img src="assets/img/33.jpg" alt="">
                    <img src="assets/img/44.jpg" alt="">
                </div>
                </div>
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
                                <th>135</th>
                                <th>$12.45</th>
                                <th>$39.99</th>
                                <th>$27.54</th>
                                <th>$3,717.9</th>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                  <div class="shadow bg-white rounded p-3">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                          <div class="row pl-2 selling-sc">
                            <p>Selling on 12 Shopify store</p>
                          </div>
                          <div class="row selling-store">
                            <div class="col-12">
                              <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt=""> example.com</p>
                              <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt=""> example.com</p>
                              <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt=""> example.com</p>
                              <p><img src="assets/img/web-icon.png" style="width: 20px; margin-top: -6px;" alt=""> example.com</p>
                              <a href="">+39 more stores</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-6 selling-country pl-3">
                          <div class="row pl-2 selling-sc">
                            <p>Selling Country</p>
                          </div>
                          <div class="row selling-store">
                            <div class="col-12">
                              <p><img src="assets/img/web-path.png" style="width: 20px; margin-top: -6px;" alt=""> United State</p>
                              <p><img src="assets/img/web-path.png" style="width: 20px; margin-top: -6px;" alt=""> United State</p>
                              <p><img src="assets/img/web-path.png" style="width: 20px; margin-top: -6px;" alt=""> United State</p>
                              <p><img src="assets/img/web-path.png" style="width: 20px; margin-top: -6px;" alt=""> United State</p>
                              <a href="">+5 more Country's</a>
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
                        <img src="assets/img/55.jpg" class="img-fluid" alt="">
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
                    <ul class="nav nav-tabs modal-tab nav-justified shadow role="tablist">
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#pd1" style="font-size: 13px;" role="tab">Product Description</a>
                      </li>
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link nav-link-show-1" data-toggle="tab" href="#far1" style="font-size: 13px;" role="tab">Facebook Audience Research</a>
                        <a class="nav-link nav-link-show-2" data-toggle="tab" href="#far1" style="font-size: 13px;" role="tab">Fb Audience Research</a>
                      </li>
                    </ul>
                    <div class="tab-content pr-modal-tab bg-white shadow">
                      <div class="tab-pane fade show active pb-3" id="pd1" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            </p>
                            <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="row p-3">
                            <div class="col-7">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                            <div class="col-5">
                                <img src="./assets/img/gettyimages.jpg" class="img-fluid" style="max-height: 100px;" alt="">
                            </div>
                        </div>
                        <div class="row m-2 p-2">
                            <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                      </div>
                      <div class="tab-pane pb-3 fade" id="far1" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            </p>
                            <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="row m-2 p-2">
                            <div class="col-7">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                                </p>
                            </div>
                            <div class="col-5">
                                <img src="./assets/img/couple-shopping.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row m-2 p-2">
                            <p>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                <a href="" type="button" class="btn btn-modal-product">View Product</a>
              </div>
            </div>
        </div>
        <!-- /.row -->
        <footer>
          <div class="row justify-content-center my-4">
            <copyright>&copy; 2020 - 2021 eButify Inc. All rights reserved</copyright>
          </div>
        </footer>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
