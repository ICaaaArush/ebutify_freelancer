@extends('layoutsUser.user4')
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
                     <h3>Untapped Product Research</h3>
                     <a type="button" class="btn btn-facebook-ads" href=""><i class="fas fa-video"></i> Tutorials</a>
                  </div>
               <form class="col-12" method="get" action="{{ route('untapped-product') }}">
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
               <form id="filterForm" method="get" action="{{ route('untapped-product') }}">
                  <div class="row mx-2">
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2 filter-item" name="category">
                           <option value="">All Categories</option>
                           <option value="1">Women's Fashion</option>
                           <option value="2">Man's Fashion</option>
                           <option value="3">Health & Beauty</option>
                           <option value="4">Home Improvement</option>
                           <option value="5">Garden Improvement</option>
                           <option value="6">Pet Accessories</option>
                           <option value="7">Electronics</option>
                           <option value="8">Computer Accessories</option>
                           <option value="9">Baby & Kids</option>
                           <option value="10">Kitchen & household</option>
                           <option value="11">Jewellery</option>
                           <option value="12">Car Accessories</option>
                           <option value="13">Bike Accessories</option>
                           <option value="14">Mobile Accessories</option>
                           <option value="15">Fitness</option>
                           <option value="16">Bag's & Shoes</option>
                           <option value="17">Outdoor</option>
                           <option value="18">Beauty Hair</option>
                        </select>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2 filter-item" name="niche">
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
                        <select class="form-control select2-no-search filter-item" name="filter" style="width: 100%;">
                           <option>Filter Products</option>
                           <option value="1">By Price under $30</option>
                           <option value="2">By Price Over $30</option>
                           <option value="3">By Profit Over $15</option>
                           <option value="4">By Cost under $20</option>
                        </select>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2-no-search filter-item" name="sort" style="width: 100%;">
                           <option>Sort Produtcs</option>
                           <option value="1">By Profit</option>
                           <option value="2">By Total Orders</option>
                           <option value="3">By Last added Date</option>
                           <option value="4">By Image</option>
                           <option value="5">By Video</option>
                        </select>
                     </div>
                  </div>
               </form>
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
<div class="col-md-4 mt-4">
                     <div class="card shadow" style="min-width: 280px;">
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
                        @foreach ($trendingProduct->ProductLink as $productLink)
                        <div class="row mx-4 px-2 mb-2 rounded justify-content-between icon-btn">
                           <a href="{{$productLink->facebook_ad}}" class="fb-ads-card-footer"><img src="{{asset('assets/img/fb-2.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="{{$productLink->aliexpress}}" class="fb-ads-card-footer"><img src="{{asset('assets/img/ali.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="{{$productLink->amazon}}" class="fb-ads-card-footer"><img src="{{asset('assets/img/amz.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="{{$productLink->competitor_link_1}}" class="fb-ads-card-footer"><img src="{{asset('assets/img/shp.png')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="{{$productLink->youtube}}" class="fb-ads-card-footer"><i class="fab fa-youtube" style="color: #FF0000; font-size: 26px;margin: 0 5px;"></i></a>
                        </div>
                        @endforeach
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
                                                         <video id="video-control" controls>
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
                                                            @php
                                                             if (!empty($trendingProduct->productLink[0]->competitor_link_1)){
                                                                 $gifs = $trendingProduct->productLink[0]->competitor_link_1;
                                                               }
                                                             if(!empty($trendingProduct->productLink[0]->competitor_link_2)){
                                                               if(!empty($gifs)){
                                                                 $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_2;
                                                               }else{
                                                                 $gifs = $trendingProduct->productLink[0]->competitor_link_2;
                                                               }
                                                             }
                                                             if (!empty($trendingProduct->productLink[0]->competitor_link_3)){
                                                               if(!empty($gifs)){
                                                                 $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_3;
                                                               }else{
                                                                 $gifs = $trendingProduct->productLink[0]->competitor_link_3;
                                                               }
                                                             }
                                                             if (!empty($trendingProduct->productLink[0]->competitor_link_4)){
                                                               if(!empty($gifs)){
                                                                 $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_4;
                                                               }else{
                                                                 $gifs = $trendingProduct->productLink[0]->competitor_link_4;
                                                               }
                                                             }
                                                             if (!empty($trendingProduct->productLink[0]->competitor_link_5)){
                                                               if(!empty($gifs)){
                                                                 $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_5;
                                                               }else{
                                                                 $gifs = $trendingProduct->productLink[0]->competitor_link_5;
                                                               }
                                                             }
                                                             $files = explode(',', $gifs);
                                                             @endphp
                                                             <p>Selling on {{count($files)}} Shopify store</p>
                                                           </div>
                                                         <div class="row selling-store">
                                                           <div class="col-12">
                                                             <?php if (!empty($files)) {
                                                               foreach ($files as $link) {
                                                                 $address1 = $link;
                                                                 $split1 = explode("com",$address1);
                                                                 ?><p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt="">  {{$split1[0]}}com...<a href="{{$link}}"><?php
                                                               }
                                                             } ?>
                                                           </div>
                                                         </div>
                                                         </div>
                                                         <div class="col-sm-6 col-md-6 selling-country pl-3" style="max-width: 500%;">
                                                           <div class="row pl-2 selling-sc">
                                                             <p>Selling Country</p>
                                                           </div>
                                                           <div class="row selling-store">
                                                             <div class="col-12">
                                                               @php
                                                               $countrys = $trendingProduct->country;
                                                               $countrys = explode(',', $countrys);
                                                               @endphp
                                                               @foreach($countrys as $country)
                                                            <p><img src="{{asset('assets/img/web-path.png')}}" style="width: 20px; margin-top: -6px;" alt=""> {{$country}}</p>
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
                                             @foreach ($trendingProduct->ProductLink as $productLink)
                                             <div class="col-12 shadow bg-white border-rounded mb-4">
                                                <ul class="list-group list-group-flush py-3 list-unstyled prm-list">
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->competitor_link_1}}" role="tab"><i class="fas fa-store-alt"></i> Visit Competitor Store</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->aliexpress}}" role="tab"><img src="{{asset('assets/img/ali.png')}}" style="width: 12px; margin-bottom: 2px;" alt=""> Visit AliExpress Source</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->amazon}}" role="tab"><i class="fab fa-amazon"></i> View Product On Amazon</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->ebay}}" role="tab"><i class="fab fa-ebay"></i> View Product On eBay</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->facebook_ad}}" role="tab"><i class="fab fa-facebook"></i> View Facebook Ads</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->youtube}}" role="tab"><i class="fab fa-youtube"></i> View YouTube Review</a></li>
                                                </ul>
                                                <div class="slider2">
                                                @foreach ($trendingProduct->productImage as $productImage)
                                                   <div>
                                                      <img src="{{asset('storage/'.$productImage->gif_1)}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{asset('storage/'.$productImage->gif_2)}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{asset('storage/'.$productImage->gif_3)}}" class="img-fluid" alt="">
                                                   </div>
                                                
                                                </div>
                                                <div class="slider-nav2 my-2 justify-content-between">
                                                   <img src="{{asset('storage/'.$productImage->gif_1)}}" class="img-fluid" alt="gif 1">
                                                   <img src="{{asset('storage/'.$productImage->gif_2)}}" class="img-fluid" alt="">
                                                   <img src="{{asset('storage/'.$productImage->gif_3)}}" class="img-fluid" alt="">
                                                </div>
                                                @endforeach
                                                @php
                                                  if (!empty($productImage->gif_1)){
                                                      $gifs = $productImage->gif_1;
                                                    }
                                                  if(!empty($productImage->gif_2)){
                                                    if(!empty($gifs)){
                                                      $gifs = $gifs.",".$productImage->gif_2;
                                                    }else{
                                                      $gifs = $productImage->gif_2;
                                                    }
                                                  }
                                                  if (!empty($productImage->gif_3)){
                                                    if(!empty($gifs)){
                                                      $gifs = $gifs.",".$productImage->gif_3;
                                                    }else{
                                                      $gifs = $productImage->gif_3;
                                                    }
                                                  }
                                                  @endphp
                                                <div class="mb-2 float-right">
                                                   <p class="d-inline-block" style="font-size: 13px;">Download Gif Images</p>
                                                   <button class="btn-download" value="download">
                                                   <a href="{{route('downloadGIF',[$gifs])}}">Download</a></button>
                                                </div>
                                             </div>
                                             @endforeach
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
</div>
<?php $j++; ?>
@endforeach
                  </div>
               </div>
@endsection