<!DOCTYPE html>

<html class="no-js" lang="">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>eButify Dashboard</title>
    <meta name="description" content="eButify Dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="" />
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png" />

    <link
      rel="stylesheet"
      href="{{asset('https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css')}}"
    />
    <link type="text/css" rel="stylesheet" href="{{asset('csss/cs-skin-elastic.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('csss/style.css')}}" />
    <script type="text/javascript" src="{{asset('https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
  </head>

  <body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="index.html"
                ><i class="menu-icon fa fa-dashboard"></i>Dashboard
              </a>
            </li>

            <li class="menu-item-has-children dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="menu-icon fa fa-shopping-cart"></i> product
                research</a
              >
              <ul class="sub-menu children dropdown-menu">
                <li>
                  <i class="fa fa-id-card-o"></i
                  ><a href="pages/hotproduct.html">Hot Products</a>
                </li>
                <li>
                  <i class="fa fa-id-card-o"></i
                  ><a href="pages/trending.html">Trending Products</a>
                </li>
                <li>
                  <i class="fa fa-exclamation-triangle"></i
                  ><a href="pages/ontherise.html">on The Rise</a>
                </li>
                <li>
                  <i class="fa fa-spinner"></i
                  ><a href="pages/newproduct.html">New Product</a>
                </li>
                <li>
                  <i class="fa fa-fire"></i
                  ><a href="pages/allproduct.html">All products</a>
                </li>
                <li>
                  <i class="fa fa-book"></i
                  ><a href="pages/hotproduct.html">Hot stores</a>
                </li>
              </ul>
            </li>
            <li class="menu-item-has-children dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="menu-icon fa fa-cog"></i>Explorers</a
              >
              <ul class="sub-menu children dropdown-menu">
                <li>
                  <i class="fa fa-shopping-basket"></i
                  ><a href="pages/aliexpress.html">Aliexpress</a>
                </li>
                <li>
                  <i class="fa fa-amazon"></i
                  ><a href="pages/amazon.html">Amazon</a>
                </li>
                <li>
                  <i class="fa fa-shopping-bag"></i
                  ><a href="pages/shopifyproduct.html">Shopify Products</a>
                </li>
                <li>
                  <i class="fa fa-shopping-cart"></i
                  ><a href="pages/shopifystore.html">Shopify Stores</a>
                </li>
              </ul>
            </li>
            <li class="menu-item-has-children dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="menu-icon fa fa-info"></i>Help</a
              >
              <ul class="sub-menu children dropdown-menu">
                <li><a href="pages/tutorial.html">Tutorials</a></li>
                <li>
                  <i class="menu-icon fa fa-th"></i
                  ><a href="../pages/succes.html">Success Academy</a>
                </li>
                <li><a href="pages/contact.html">Contract Us</a></li>
                <li><a href="#">join Private group</a></li>
                <li><a href="#">Like on Facebook</a></li>
                <li><a href="#">Follow on Twitter</a></li>
                <li><a href="#">Subscribe on Youtube</a></li>
              </ul>
            </li>

            <li class="menu-title">Quick Links</li>
            <!-- /.menu-title -->

            <li>
              <a href="pages/tutorial.html"
                ><i class="menu-icon fa fa-video-camera"></i>Tutorials
              </a>
            </li>

            <li>
              <a href="pages/faq.html"
                ><i class="menu-icon fa fa-question"></i>FAQ
              </a>
            </li>

            <li>
              <a href="pages/contact.html"
                ><i class="menu-icon fa fa-phone"></i>Contact us
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
      <!-- Header-->
      <header id="header" class="header">
        <div class="top-left">
          <div class="navbar-header">
            <a class="navbar-brand" href="./"
              ><img src="userImages/logo.png" alt="Logo"
            /></a>
            <a class="navbar-brand hidden" href="./"
              ><img src="userImages/logo2.png" alt="Logo"
            /></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
          </div>
        </div>
        <div class="top-right">
          <div class="header-menu">
            <div class="header-left">
              <button class="search-trigger">
                <i class="fa fa-search"></i>
              </button>
              <div class="form-inline">
                <form class="search-form">
                  <input
                    class="form-control mr-sm-2"
                    type="text"
                    placeholder="Search ..."
                    aria-label="Search"
                  />
                  <button class="search-close" type="submit">
                    <i class="fa fa-close"></i>
                  </button>
                </form>
              </div>

              <div class="dropdown for-notification">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="notification"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-shopping-cart"></i>
                </button>
              </div>

              <div class="dropdown for-notification">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="notification"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-heart"></i>
                </button>
              </div>

              <div class="dropdown for-notification">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="notification"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-bell"></i>
                  <span class="count bg-danger">3</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="notification">
                  <p class="red">You have 3 Notification</p>
                  <a class="dropdown-item media" href="#">
                    <i class="fa fa-check"></i>
                    <p>Server #1 overloaded.</p>
                  </a>
                  <a class="dropdown-item media" href="#">
                    <i class="fa fa-info"></i>
                    <p>Server #2 overloaded.</p>
                  </a>
                  <a class="dropdown-item media" href="#">
                    <i class="fa fa-warning"></i>
                    <p>Server #3 overloaded.</p>
                  </a>
                </div>
              </div>

              <div class="dropdown for-message">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="message"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-envelope"></i>
                  <span class="count bg-primary">4</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="message">
                  <p class="red">You have 4 Mails</p>
                  <a class="dropdown-item media" href="#">
                    <span class="photo media-left"
                      ><img alt="avatar" src="userImages/avatar/1.jpg"
                    /></span>
                    <div class="message media-body">
                      <span class="name float-left">Jonathan Smith</span>
                      <span class="time float-right">Just now</span>
                      <p>Hello, this is an example msg</p>
                    </div>
                  </a>
                  <a class="dropdown-item media" href="#">
                    <span class="photo media-left"
                      ><img alt="avatar" src="userImages/avatar/2.jpg"
                    /></span>
                    <div class="message media-body">
                      <span class="name float-left">Jack Sanders</span>
                      <span class="time float-right">5 minutes ago</span>
                      <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                  </a>
                  <a class="dropdown-item media" href="#">
                    <span class="photo media-left"
                      ><img alt="avatar" src="userImages/avatar/3.jpg"
                    /></span>
                    <div class="message media-body">
                      <span class="name float-left">Cheryl Wheeler</span>
                      <span class="time float-right">10 minutes ago</span>
                      <p>Hello, this is an example msg</p>
                    </div>
                  </a>
                  <a class="dropdown-item media" href="#">
                    <span class="photo media-left"
                      ><img alt="avatar" src="userImages/avatar/4.jpg"
                    /></span>
                    <div class="message media-body">
                      <span class="name float-left">Rachel Santos</span>
                      <span class="time float-right">15 minutes ago</span>
                      <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>

            <div class="user-area dropdown float-right">
              <a
                href="#"
                class="dropdown-toggle active"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="user-avatar rounded-circle"
                  src="userImages/admin.jpg"
                  alt="User Avatar"
                />
              </a>

              <div class="user-menu dropdown-menu">
                <a class="nav-link" href="pages/password.html"
                  ><i class="fa fa-lock"></i>Password</a
                >

                <a class="nav-link" href="pages/subscriptions.html"
                  ><i class="fa fa-user"></i>subcription
                  
                

                <a class="nav-link" href="pages/billing.html"
                  ><i class="fa fa-credit-card"></i>Billing</a
                >

              

                <a class="nav-link" href="#"
                  ><i class="fa fa-power -off"></i>Logout</a
                >
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- /#header -->


@yield('content')

      <!-- Footer -->

      <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js')}}"></script>
    <script src="{{asset('jss/main.js')}}"></script>

    <!--  Chart js -->
    <!-- <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js')}}"></script> -->

    <!--Local Stuff-->
    <script></script>
  </body>
</html>
