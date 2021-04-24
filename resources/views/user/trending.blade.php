@extends('layoutsUser.user')
@section('content')
<!-- Content -->
<div class="content containers">
   <!-- Animated -->
   <div class="animated fadeIn">
      <!-- Widgets  -->
      <div class="top_section">
         <div class="ebutify-product-title">
            <h1>Trending Product</h1>
         </div>
         <div class="ebutify-tutorial">
            <button class="btn button1">
            <i class="fa fa-video-camera"></i> <a href="../pages/tutorial.html">TUTORIALS</a> 
            </button>
         </div>
      </div>
      <!--search Box-->
      <div class="row my-3 mt-3 mx-2">
         <div class="col-lg-6 col-md-6">
            <div class="input-group mb-3">
               <input
                  class="form-control search"
                  type="search"
                  placeholder="search.."/>
               <div class="input-group-append">
                  <button class="btn lgreen">
                  <i class="fa fa-search"></i>
                  </button>
               </div>
            </div>
         </div>
         <br>
         <div class="row container p-3 mx-2 ">
            <div class="col-lg-3 col-md-6 mt-2">
               <div class="dropdown ">
                  <button class="btn btn-light dropdown-toggle px-5 px-2 " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  All catagories 
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                     <a class="dropdown-item" href="#">Air condition</a>
                     <a class="dropdown-item" href="#">android</a>
                     <a class="dropdown-item" href="#">Baby</a>
                     <a class="dropdown-item" href="#">Backpack</a>
                     <a class="dropdown-item" href="#">Beatch</a>
                     <a class="dropdown-item" href="#">Beauty/a>
                     <a class="dropdown-item" href="#">Cars</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-2 mx-2">
               <div class="dropdown ">
                  <button class="btn px-5 px-2 btn-light dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  All Niches
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                     <a class="dropdown-item" href="#">Air condition</a>
                     <a class="dropdown-item" href="#">android</a>
                     <a class="dropdown-item" href="#">Baby</a>
                     <a class="dropdown-item" href="#">Backpack</a>
                     <a class="dropdown-item" href="#">Beatch</a>
                     <a class="dropdown-item" href="#">Beauty/a>
                     <a class="dropdown-item" href="#">Cars</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-2 mx-2">
               <select class="form-control " name="" id="">
                  <option value="">Filet Products</option>
                  <option value="">By Product Type</option>
                  <option value="">By price over</option>
                  <option value="">By Price under</option>
                  <option value="">By orders over </option>
                  <option value="">By Found Date</option>
                  <option value="">By Last added Date</option>
               </select>
            </div>
            <div class="col-lg-2 col-md-6 mt-2 ">
               <select class="form-control" name="" id="">
                  <option value="">Sort Products</option>
                  <option value="">By stores Selling</option>
                  <option value="">By Total Orders</option>
                  <option value="">By Found Date</option>
                  <option value="">By Last added Date</option>
               </select>
            </div>
         </div>
      </div>
      @for($i=0; $i<$rows; $i++)
      <div class="row">
        @foreach($trendingProducts as $trendingProduct)
        <div class="col-lg-3 col-md-6">
          <div class="card">
             <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong">
                @foreach ($trendingProduct->productImage as $productImage)
                <div>
                   <img
                      height="200px"
                      src="{{$productImage->image_link_1}}"
                      class="img-fluid"
                      alt=""
                      srcset=""
                      />
                </div>
                @endforeach
             </button>
             <div class="card-header">
                <h3 data-toggle="modal" data-target="#exampleModalLong" class="text-left text1">
                   {{$trendingProduct->product_name}}
                </h3>
             </div>
             <!--demo-->
             <div class="card-body  card-t">
                <hr width="90%" />
                <div>
                   <span>Order</span>
                   <span class="trend">{{$trendingProduct->total_order}}</span>
                </div>
                <div>
                   <span>Product Cost</span>
                   <span class="trend">$9.05</span>
                </div>
                <div>
                   <span>Selling Price</span>
                   <span class="trend">$19.05</span>
                </div>
                <div>
                   <span>Profit Margin</span>
                   <span class="trend">$15.05</span>
                </div>
                <div>
                   <span>Sales</span>
                   <span class="trend">$50.05</span>
                </div>
                <br>
                <div class="social">
                   <button   class="btn lgreen"><a data-toggle="modal" data-target="#exampleModalLong" class="text-light" href="">product Research</a></button>
                </div>
                <div class="text-center mt-3">
                   <!--Product modal start-->
                   <div class="modal fade container-fluid" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                      <div class="modal-dialog modal-lg xl" role="document">
                         <div class="modal-content ">
                            <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                               </button>
                               <!--Product Details-->
                               <div class="product p-3 mb-2">
                                  <div class="row modal-title" id="exampleModalLongTitle ">
                                     <div class="col-lg-8 col-md-6">
                                        <h1 class="product-title p-title">
                                           Product Title: Lorem ipsum dolor sit amet
                                        </h1>
                                     </div>
                                     <div class="col-lg-4 col-md-6 mt-2  text-dark">
                                        <span class="p-subtitle mt-2">Found 2 Month 3 Days 20 min ago</span>
                                     </div>
                                  </div>
                                  <hr />
                                  <div class="row">
                                     <div class="col-lg-4 col-md-6 slide">
                                        <!-- Full-width images with number text -->
                                        <div class="mySlides">
                                           <div class="numbertext">1 / 6</div>
                                           <img src="../images/img1.jpg" style="width: 100%" />
                                        </div>
                                        <div class="mySlides">
                                           <div class="numbertext">2 / 6</div>
                                           <img src="../images/img2.jpg" style="width: 100%" />
                                        </div>
                                        <div class="mySlides">
                                           <div class="numbertext">3 / 6</div>
                                           <img src="../images/img3.jpg" style="width: 100%" />
                                        </div>
                                        <div class="mySlides">
                                           <div class="numbertext">4 / 6</div>
                                           <img src="../images/img4.jpg" style="width: 100%" />
                                        </div>
                                        <div class="mySlides">
                                           <div class="numbertext">5 / 6</div>
                                           <img src="../images/img5.jpg" style="width: 100%" />
                                        </div>
                                        <div class="mySlides">
                                           <div class="numbertext">6 / 6</div>
                                           <img src="../images/img6.jpg" style="width: 100%" />
                                        </div>
                                        <div class="video2">
                                           <a href="#"> <i class="fa fa-play-circle"></i></a>
                                        </div>
                                        <!-- Next and previous buttons -->
                                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                        <!-- Image text -->
                                        <!-- Thumbnail images -->
                                        <div class="row m-3">
                                           <div class="column">
                                              <img
                                                 class="demo cursor card"
                                                 src="../images/img1.jpg"
                                                 style="width: 100%"
                                                 onclick="currentSlide(1)"
                                                 alt="The Woods"
                                                 />
                                           </div>
                                           <div class="column">
                                              <img
                                                 class="demo cursor card"
                                                 src="../images/img2.jpg"
                                                 style="width: 100%"
                                                 onclick="currentSlide(2)"
                                                 alt="Cinque Terre"
                                                 />
                                           </div>
                                           <div class="column">
                                              <img
                                                 class="demo cursor card"
                                                 src="../images/img3.jpg"
                                                 style="width: 100%"
                                                 onclick="currentSlide(3)"
                                                 alt="Mountains and fjords"
                                                 />
                                           </div>
                                           <div class="column">
                                              <img
                                                 class="demo cursor card"
                                                 src="../images/img4.jpg"
                                                 style="width: 100%"
                                                 onclick="currentSlide(4)"
                                                 alt="Northern Lights"
                                                 />
                                           </div>
                                           <div class="column">
                                              <img
                                                 class="demo cursor card"
                                                 src="../images/img5.jpg"
                                                 style="width: 100%"
                                                 onclick="currentSlide(5)"
                                                 alt="Nature and sunrise"
                                                 />
                                           </div>
                                           <div class="column">
                                              <img
                                                 class="demo cursor card shadow-lg"
                                                 src="../images/img6.jpg"
                                                 style="width: 100%"
                                                 onclick="currentSlide(6)"
                                                 alt="Snowy Mountains"
                                                 />
                                           </div>
                                        </div>
                                        <div class="socialbar text-left shadow-sm">
                                           <span class="Social-icon"> <img src="../images/shp.png" class="simage" alt=""><a href="#"> Visit competitor Store</a></span>
                                        </div>
                                        <div class="socialbar text-left shadow-sm">
                                           <span class="Social-icon"> <img src="../images/ali.png" class="simage" alt=""><a href="#">Visit Aliexpress source</a></span>
                                        </div>
                                        <div class="socialbar text-left shadow-sm">
                                           <span class="Social-icon"> <img src="../images/amz.png" class="simage" alt=""><a href="#">View product on Amazon</a></span>
                                        </div>
                                        <div class="socialbar text-left shadow-sm">
                                           <span class="Social-icon"> <img src="../images/ebay (1).png" class="simage" alt=""><a href="#">View product on eBay</a></span>
                                        </div>
                                        <div class="socialbar text-left shadow-sm">
                                           <span class="Social-icon"> <img src="../images/fb.png" class="simage" alt=""><a href="#">view Facebook Ads</a></span>
                                        </div>
                                        <div class="socialbar text-left shadow-sm">
                                           <span class="Social-icon"> <img src="../images/youtube (1).png" class="simage" alt=""><a href="#">View Youtube review</a></span>
                                        </div>
                                        <div class="card">
                                           <div class="mt-3">
                                              <div class="galary ">
                                                 <img src="../images/img4.jpg" id="myImg" alt="" class="px-2 py-2">
                                                 <table class="px-3">
                                                    <tr>
                                                       <td>  <img src="../images/img4.jpg" id="im1" alt="" onclick="myFunction()" class="image1 img-fluid"></td>
                                                       <td>  <img src="../images/img3.jpg" id="im2" alt="" onclick="myFunction1()" class="image1 img-fluid"></td>
                                                       <td><img src="../images/img2.jpg" id="im3" alt="" onclick="myFunction2()" class="image1 img-fluid"></td>
                                                       <td><img src="../images/img5.jpg" id="im4" alt="" onclick="myFunction3()" class="image1 img-fluid"></td>
                                                    </tr>
                                                 </table>
                                                 <div class="prbutton mt-2 p-2">
                                                    <span class="prspan">Download gif image <button class="btn ml-2  lgreen"><a href="#">Download</a></button> </span>
                                                 </div>
                                              </div>
                                              <br>
                                              <div class="video1">
                                                 <a href="#"> <i class="fa fa-play-circle"></i></a>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-lg-8 col-md-6">
                                        <div class="card">
                                           <div class="price">
                                              <div class="p-3 text-center">
                                                 <h3>order</h3>
                                                 <span class="text-center">135</span>
                                              </div>
                                              <div class="p-3 text-center">
                                                 <h3>Product Cost</h3>
                                                 <span">$12.45</span>
                                              </div>
                                              <div class="p-3 text-center">
                                                 <h3> Selling Price</h3>
                                                 <span class="text-center">$39.50</span>
                                              </div>
                                              <div class="p-3 text-center">
                                                 <h3>Profit</h3>
                                                 <span class="text-center">$27.5</span>
                                              </div>
                                              <div class="p-3 text-center">
                                                 <h3>Total sales</h3>
                                                 <span class="text-center">$37,12.9</span>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="card p-3">
                                           <div class="product">
                                              <table class="table table-borderless ">
                                                 <tr>
                                                    <td>
                                                       <h2 class="text3">Selling on 12 shopify store</h2>
                                                    </td>
                                                    <td>
                                                       <h2 class="text3">selling country</h2>
                                                    </td>
                                                 </tr>
                                                 <tr>
                                                    <td>
                                                       <i class="fa fa-globe"></i> <a href="#">example.com</a><br>
                                                       <i class="fa fa-globe"></i> <a href="#">example.com</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="#">example.com</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="#">example.com</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="#">example.com</a>
                                                    </td>
                                                    <td>
                                                       <i class="fa fa-globe"></i> <a href="#">united state</a><br>
                                                       <i class="fa fa-globe"></i> <a href="#">united state</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="#">united state</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="#">united state</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="#">united state</a>
                                                    </td>
                                                 </tr>
                                              </table>
                                           </div>
                                        </div>
                                        <!--card-->
                                        <div class="card p-3">
                                           <div class="event_list">
                                              <div class="event1">
                                                 <!-- Nav pills -->
                                                 <ul class="nav nav-tabs nav-active">
                                                    <li class="nav-item t1">
                                                       <a class="nav-link active" data-toggle="pill" href="#product">Product Description</a>
                                                    </li>
                                                    <li class="nav-item t1">
                                                       <a class="nav-link" data-toggle="pill" href="#Parties">Facebook Audience Research</a>
                                                    </li>
                                                 </ul>
                                                 <!-- Tab panes -->
                                                 <div class="tab-content">
                                                    <div class="tab-pane container active" id="product">
                                                       <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, explicabo exercitationem dolorem non impedit illum porro, sapiente in expedita ipsum quia fuga quos. Ex sequi, rem illo harum quibusdam deleniti.
                                                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas a ipsam non maiores excepturi, nobis repellat ducimus dolores quos voluptas temporibus ad nisi aspernatur expedita illum. Soluta quae doloribus impedit!
                                                       </p>
                                                    </div>
                                                    <div class="tab-pane container fade" id="Parties">
                                                       <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, explicabo exercitationem dolorem non impedit illum porro, sapiente in expedita ipsum quia fuga quos. Ex sequi, rem illo harum quibusdam deleniti.
                                                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas a ipsam non maiores excepturi, nobis repellat ducimus dolores quos voluptas temporibus ad nisi aspernatur expedita illum. Soluta quae doloribus impedit!
                                                       </p>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                        <div class="button py-3">
                                           <button data-dismiss="modal" class="btn lgreen "> cancel</button>
                                           <button class="btn lgreen"><a class="text-light" href="../pages/viewproduct.html">View product</a> </button>
                                        </div>
                                     </div>
                                     <!-- Animated -->
                                     <div class="animated fadeIn">
                                        <!-- Widgets  -->
                                        <div class="clearfix"></div>
                                        <!-- /#add-category -->
                                     </div>
                                     <!-- .animated -->
                                  </div>
                                  <!-- /.content -->
                                  <div class="clearfix"></div>
                                  <!-- Footer -->
                                  <!-- /.site-footer -->
                               </div>
                               <!--Product Details end-->
                            </div>
                         </div>
                      </div>
                   </div>
                   <!--Product modal End-->
                </div>
             </div>
          </div>
        </div>
        @endforeach
      </div>
      @endfor
      <div class="clearfix"></div>
      <!-- /#add-category -->
   </div>
   <!-- .animated -->
</div>
<!-- /.content -->
<div class="condtainer">
   <p class="text-center">© 2017 - 2021 Sell The Trend. All rights reserved</p>
</div>
<div class="clearfix"></div>
@endsection