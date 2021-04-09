<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>eButify edit Dashboard</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="apple-icon.png" />
    <link rel="shortcut icon" href="favicon.ico" />

    <link
      rel="stylesheet"
      href="../vendors/bootstrap/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="../vendors/font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css" />
    <link rel="stylesheet" href="../vendors/jqvmap/dist/jqvmap.min.css" />

    <link rel="stylesheet" href="../assets/css/style.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body>
    <!-- Left Panel -->

    <aside id="left-panel top-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#main-menu"
            aria-controls="main-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="../index.html"
            > <span class="logo">edit my Profile</span> </a>
          <a class="navbar-brand hidden" href="../index.html"
            ><img src="../images/logo2.png" alt="Logo"
          /></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="">
              <a href="../index.html">
                <i class="menu-icon fa fa-dashboard"></i>Dashboard
              </a>
            </li>

                   <li class="">
              <a href="../pages/work-report.html">
                <i class="menu-icon fa fa-wifi"></i>Report
              </a>
            </li>
            
              <li class="">
              <a href="../pages/message.html">
                <i class="menu-icon fa fa-envelope"></i>Message
              </a>
            </li>
              <li class="">
              <a href="../pages/product-research.html">
                <i class="menu-icon fa fa-search"></i>Product Research
              </a>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
      <!-- Header-->
      <header id="header" class="header">
        <div class="header-menu">
          <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"
              ><i class="fa fa fa-bars"></i
            ></a>
            <div class="header-left">
             
              

            <!--  <div class="dropdown for-notification">
                <button
                  class="btn btn-secondary dropdown-toggle"
                  type="button"
                  id="notification"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fa fa-bell"></i>
                  <span class="count bg-danger">5</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="notification">
                  <p class="red">You have 3 Notification</p>
                  <a class="dropdown-item media bg-flat-color-1" href="#">
                    <i class="fa fa-check"></i>
                    <p>Server #1 overloaded.</p>
                  </a>
                  <a class="dropdown-item media bg-flat-color-4" href="#">
                    <i class="fa fa-info"></i>
                    <p>Server #2 overloaded.</p>
                  </a>
                  <a class="dropdown-item media bg-flat-color-5" href="#">
                    <i class="fa fa-warning"></i>
                    <p>Server #3 overloaded.</p>
                  </a>
                </div>
              </div>-->

              
            </div>
          </div>

          <div class="col-sm-5">



            
            <div class="user-area dropdown px-3 float-right">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="user-avatar rounded-circle"
                  src="../images/admin.jpg"
                  alt="User Avatar"
                />
              </a>

              <div class="user-menu dropdown-menu">
                <a class="nav-link" href="../pages/myprofile.html"
                  ><i class="fa fa-user"></i> My Profile</a
                >

                <a class="nav-link" href="#"
                  ><i class="fa fa-user"></i> Notifications
                  <span class="count">13</span></a
                >

                <a class="nav-link" href="#"
                  ><i class="fa fa-cog"></i> Settings</a
                >

                <a class="nav-link" href="#"
                  ><i class="fa fa-power-off"></i> Logout</a
                >
              </div>
            </div>

               <div class="user-area dropdown float-right">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
               <i class="ti-email"></i>
                  <span class="count bg-primary">9</span>
              </a>

              
              

              <div class="user-menu dropdown-menu">
                
                 <div class="card1 p-2">
                 <table>
                   <tr> <td><i class="fa fa-envelope"> <span class="">You have 1 Message</span>  </i></td> </tr> 
                   <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-envelope"> You have 2 Message </i></td> </tr>
                    <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-envelope"> You have 2 Message </i></td> </tr>
                 </table>
                </div>
                
              </div>
            </div>

             <div class="user-area dropdown px-2 float-right">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                  
                <i class="fa fa-bell"></i>
                  <span class="count bg-danger">5</span>
              </a>
              </a>

              <div class="user-menu dropdown-menu">
                 <div class="card1 p-2">
                 <table>
                   <tr> <td><i class="fa fa-bell"> <span class="text-danger">You have 1 Notification</span>  </i></td> </tr> 
                   <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-bell"> You have 2 Notification </i></td> </tr>
                    <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-bell"> You have 2 Notification </i></td> </tr>
                 </table>
                </div>
              </div>
            </div>
            <!--Notifiaction start-->

           

                <!--Notifiaction End-->
          </div>
        </div>
      </header>
      <!-- /header -->
      <!-- Header-->

      <div class="content mt-3">
        <div class="col-sm-12">
        

      <div class="card p-3 radius">
        <div class="row">
          <div class="col-lg-7 md-6">
             <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
          <div class="col-lg-5 col-md-6">
             <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
        </div>

        <div class="row pt-2">
          <div class="col-lg-7 col-md-6">
             <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
          <div class="col-lg-5">
             <label for="exampleInputEmail1">Phone</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
        </div>

        <div class="row pt-2">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="card border mx-auto p-3" width="100%" >
              <div class="card-image-top">
                <img src="../images/admin.jpg" class="img1 img-fluid mx-auto d-block p-3" alt=""  srcset="">
              </div>

             <div>
  <label for="files" class="btn border"> <i class="fa fa-image"></i>  Upload profile image</label>
  <input id="files" style="visibility:hidden;" type="file">
</div>
            </div>
          </div>
          <div class="col-lg-9 col-md-6">
              <label for="exampleInputEmail1">select user Role</label>
      <select name="" id="exampleInputEmail1" class="form-control"  aria-describedby="emailHelp">
        <option value="">Admin</option>
         <option value="">Administrator</option>
          <option value="">editor</option>
           <option value="">others</option>
      </select> 

      <label for="exampleInputEmail1">registration No.</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

      <label for="exampleInputEmail1">Education</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
          </div>
        </div>
      </div>
       

     

      

       
      </div>
      <!-- .content -->
    </div>
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <script src="../vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
      (function ($) {
        "use strict";

        jQuery("#vmap").vectorMap({
          map: "world_en",
          backgroundColor: null,
          color: "#ffffff",
          hoverOpacity: 0.7,
          selectedColor: "#1de9b6",
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ["#1de9b6", "#03a9f5"],
          normalizeFunction: "polynomial",
        });
      })(jQuery);
    </script>
  </body>
</html>
