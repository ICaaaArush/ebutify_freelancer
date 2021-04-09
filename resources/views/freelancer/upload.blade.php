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
    <title>eButify upload</title>
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
          <a class="navbar-brand" href="./"
            > <span class="logo">eButify Freelancer Dashboard</span> </a>
          <a class="navbar-brand hidden" href="./"
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
                   <tr> <td><i class="fa fa-bell"> <span class="">You have 1 Message</span>  </i></td> </tr> 
                   <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-bell"> You have 2 Message </i></td> </tr>
                    <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-bell"> You have 2 Message </i></td> </tr>
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
        

          <div class="card p-2">
            
              <h1 class="itext htext p-2">Upload New Product</h1>
              <hr> 

              <div class="product1 ">
                <div class="div1 p-2">
                  <div class="itext p-1">Product name</div>
                  <input type="text" id="fname" class="form-control" name="fname">
                </div>

                   <div class="div2 p-2">
                  <div class="itext p-1">Cost</div>
                  <input type="text" id="fname" class="form-control cost" name="fname">
                </div>

                <div class="div3 p-2">
                  <div class="itext p-1">Profit</div>
                  <input type="text" id="fname" class="form-control profit" name="fname">
                </div>
                <div class="div4 p-2">
                  <div class="itext p-1">Total order</div>
                  <input type="text" id="fname" class="form-control order" name="fname">
                </div>

                 <div class="div5 p-2">
                  <div class="itext p-1">Total revinue</div>
                  <input type="text" id="fname" class="form-control" name="fname">
                </div>

                 <div class="div6 p-2">
                  <div class="itext p-1">Alexa Rank</div>
                  <input type="text" id="fname" class="form-control" name="fname">
                </div>

                <div class="div7 p-2">
                  <div class="itext p-1">	Oppotunity level</div>
                 <select name="" id="" class="form-control level">
                         <option value="">select product Type</option>
                       </select>
                </div>

              </div>
              
             


                 <div class="product1 ">
                <div class="div1 p-2">
                  <div class="itext p-1">AliExpress Link</div>
                  <input type="text" id="fname" class="form-control space" name="fname">
                </div>

                   <div class="div2 p-2">
                  <div class="itext p-1">Facebook ads link</div>
                  <input type="text" id="fname" class="form-control space" name="fname">
                </div>

                <div class="div3 p-2">
                  <div class="itext p-1">	Google trends link</div>
                  <input type="text" id="fname" class="form-control space" name="fname">
                </div>
                <div class="div4 p-2">
                  <div class="itext p-1">	youtube link</div>
                  <input type="text" id="fname" class="form-control space" name="fname">
                </div>

                 <div class="div5 p-2">
                  <div class="itext p-1">shopify website link</div>
                  <input type="text" id="fname" class="form-control space" name="fname">
                </div>

                 

              </div>


                <div class="row p-2">
                  <div class="col-lg-7 col-md-6">
                    <div class="row">
                      <div class="col-4">
                        <table class="table table-bordered">
                          <tr>
                            <td><div class="itext">Aliexpress Image link</div> </td>
                            
                          </tr>
                          
                            <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>

                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>

                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>
                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>
                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>
                        
                        </table>
                      </div>

                      <div class="col-4">
                          <table class="table table-bordered">
                          <tr>
                            <td><div class="itext">Competitor link</div> </td>
                            
                          </tr>
                          
                            <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>

                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>

                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>
                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>
                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>
                        
                        </table>
                      </div>

                      <div class="col-4">
                          <table class="table table-bordered">
                          <tr>
                            <td> <div class="itext">Upload gif image</div> </td>
                            
                          </tr>
                          
                           <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>

                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>

                             <tr>
                            <td><input type="text" id="fname" class="form-control" name="fname"></td>
                            
                          </tr>
                             <tr>
                            <td><input type="text" id="fname" class="form-control px-2" name="fname">
                               <div> 
                      <label for="files" class="btn file mt-3 border"> <i class="fa fa-image"></i>  Upload Gif</label>
                   
</div>
                            </td>
                          
                      
                            
                          </tr>
                            
                          
                        
                        </table>
                      </div>
                    </div>
                  </div>

                <div class="col-lg-5 col-md-6 pl-2">
  <div class="product1 ">
               

                 

                <div class="div3 p-2">
                  <div class="itext p-1">	Amazon link</div>
                  <input type="text" id="fname" class="form-control space" name="fname">
                </div>
                <div class="div4 p-2">
                  <div class="itext p-1">	eBay link</div>
                  <input type="text" id="fname" class="form-control space " name="fname">
                </div>

                

                 

              </div>

               <div class="product1 ">
               

                 

                <div class="div3 p-2">
                  <div class="itext p-1">	All video link</div>
                  <input type="text" id="fname" class="form-control space" name="fname">
                </div>
                <div class="div4 p-2">
                  <div class="itext p-1">	protective product</div>
                 <select name="" id="" class="form-control space">
                         <option value="">select product Type</option>
                       </select>
                </div>

                
         

              </div>

              <div class="row p-3">
                      <textarea class="form-control  pb-5 " placeholder="Input product Tag using Coma" name="" id=""></textarea>
                    </div>

                </div>
                   
                </div>

                <div class="row p-2 ">
                  <div class="col-7">
                    <div class="row ">
                      <div class="col-4 mb-5">
                        <table class="table table-bordered ">
                          <tr >
                             <tr>
                            <td> <div class="itext">select Customer Age</div> </td>
                          </tr>
                          </tr>
                          <tr>
                            
                            <td>
  <select class="selectpicker form-control p-1" multiple data-live-search="true">
  <option>18-24</option>
  <option>25-34</option>
  <option>34-44</option>
   <option>45-54</option>
    <option>55-64</option>
    <option>65+</option>
</select>
</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-4 mb-1">
                          <table class="table table-bordered">
                          <tr>
                            <tr>
                            <td> <div class="itext">select Gender</div> </td>
                          </tr>
                          </tr>
                          <tr>
                            
                            <td>
   <select class="selectpicker form-control " multiple data-live-search="true">
  <option>Men</option>
  <option>Women</option>
  <option>Baby</option>
   <option>Unlsex</option>
    
</select>
</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-4">
                        <table class="table table-bordered">
                          <tr>
                            <td> <div class="itext">select category</div> </td>
                          </tr>
                          <tr>
                            <td>
                              <select class="selectpicker form-control " multiple data-live-search="true">
 <option>Health & Beauty</option>
                            <option>Baby & Kids</option>
                           <option>Fitness</option>
                          <option>Car & Accessories</option>
                          <option >Home & Garden</option>
                             <option >Pet Accessories</option>
                                <option >Others</option>
    
</select>
                              
                              
                              
                              
                              
                        </td>
                          </tr>
                        </table>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-5">

                 
                    

                     <div class="row p-3">
                     
                      <textarea class="form-control pb-5" cols="20" placeholder="input selling  country using Coma" name="" id=""></textarea>
                    </div>
                   
                  </div>
                </div>

                  <div class="row p-3">
                

              <textarea placeholder="write description here " class="form-control  " name="" id="" cols="30" rows="10"></textarea>
            
            
          </div>

    <div class="d-flex justify-content-end  m-2">
                <button class="btn text-right  mybtn"><a class="text-right" href="#"></a>Submit product</button>
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
