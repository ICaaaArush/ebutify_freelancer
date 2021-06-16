 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eButify | Customer Facebook Ads Research</title>

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
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

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
                <a href="customer-facebook-ads-research.html" class="nav-link active">
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
                <a href="customer-trending-product-research.html" class="nav-link">
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
          @foreach($trendingProducts as $trendingProduct)     
            <div class="col-md-4 mt-4">
              <div class="card shadow">
                <div class="row px-2" data-toggle="modal" data-target="#Untapped-pro-Modal">
                  @foreach ($trendingProduct->productImage as $productImage)
                  <div class="col-12 p-0 video-icon">
                    <img src="{{$productImage->image_link_1}}" class="card-img-top img-fluid" alt="...">
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
                @foreach ($trendingProduct->ProductLink as $productLink)
                <div class="row mx-4 px-2 mb-2 rounded justify-content-between icon-btn">
                  <a href="{{$productLink->facebook_ad}}" class="fb-ads-card-footer"><img src="assets/img/fb-2.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                  <a href="{{$productLink->aliexpress}}" class="fb-ads-card-footer"><img src="assets/img/ali.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                  <a href="{{$productLink->amazon}}" class="fb-ads-card-footer"><img src="assets/img/amz.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                  <a href="{{$productLink->competitor_link_1}}" class="fb-ads-card-footer"><img src="assets/img/shp.png" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                  <a href="{{$productLink->youtube}}" class="fb-ads-card-footer"><i class="fab fa-youtube" style="color: #FF0000; font-size: 26px; margin: 0 5px;"></i></a>
                </div>
                @endforeach
              </div>
            </div>
            <?php $product_id = $trendingProduct->id ?>
          @endforeach
          </div>
        </div>
        <?php echo $product_id ?>
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

<script src="{{asset('assets/js/script.js')}}"></script>

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
      $.get('{{asset('ajax/product-research-modal.blade.php')}}', function(modalData){
        $('#Untapped-pro-Modal .modal-content').html(modalData);
      });        
    });
    $('#Untapped-pro-Modal').on('hide.bs.modal', function () {
      $('#Untapped-pro-Modal .modal-content').html('<h2 class="text-center my-5">Loading...</h2>');
    });

  });
</script>

</body>
</html>