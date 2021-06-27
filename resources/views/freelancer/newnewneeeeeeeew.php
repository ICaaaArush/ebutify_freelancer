 <div class="col-md-6">
                    <!-- PRODUCT LISTING DETAILS START -->
                   <!--  <p>Showing {{$productDetails->firstItem() }} to {{$productDetails->lastItem()}} out of {{$productDetails->total()}}</p> -->
                    <!-- PRODUCT LISTING DETAILS END -->
                </div>
                <div class="col-md-2">
                <!-- {{ $productDetails->links() }} -->
                </div>

                <?php }elseif{(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 ) && !empty($trendingProduct->productLink[0]->competitor_link_3 )) { ?>
                            <p>Selling on 3 Shopify store</p>
                            <?php }elseif{(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 )) { ?>
                            <p>Selling on 2 Shopify store</p>
                            <?php }elseif{(!empty($trendingProduct->productLink[0]->competitor_link_1 )) { ?>
                            <p>Selling on 1 Shopify store</p>
                            <?php } ?>



                            <?php if (!empty($trendingProduct->productLink[0]->competitor_link_1) &&
                             !empty($trendingProduct->productLink[0]->competitor_link_2) && 
                             !empty($trendingProduct->productLink[0]->competitor_link_3) && 
                             !empty($trendingProduct->productLink[0]->competitor_link_4) && 
                             !empty($trendingProduct->productLink[0]->competitor_link_5)){ ?>
                            <p>Selling on 5 Shopify store</p> <?php } elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 ) && !empty($trendingProduct->productLink[0]->competitor_link_3 ) && !empty($trendingProduct->productLink[0]->competitor_link_4 )) { ?>
                            <p>Selling on 4 Shopify store</p>
                            <?php }elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 ) && !empty($trendingProduct->productLink[0]->competitor_link_3 )) { ?>
                            <p>Selling on 3 Shopify store</p>
                            <?php }elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 )) { ?>
                            <p>Selling on 2 Shopify store</p>
                            <?php }elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 )) { ?>
                            <p>Selling on 1 Shopify store</p>
                            <?php } ?>



                            <?php if(!empty($productLink->competitor_link_1)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_1}}">
                               
                               <?php $address1 = $productLink->competitor_link_1; ?>
                               <?php $split1 = explode("com",$address1); ?>
                               
                               {{$split1[0]}}com...</a>
                              </p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_2)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt="">
                              
                              <?php $address2 = $productLink->competitor_link_2; ?>
                              <?php $split2 = explode("com",$address2); ?>
                               <a href="{{$productLink->competitor_link_2}}">
                               {{$split2[0]}}com...</a>
                              
                              </p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_3)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_3}}">
                               
                               <?php $address3 = $productLink->competitor_link_3; ?>
                               <?php $split = explode("com",$address3); ?>
                               
                               {{$split[0]}}com...</a></p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_4)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_4}}">
                               
                               <?php $address = $productLink->competitor_link_4; ?>
                               <?php $split = explode("com",$address); ?>
                               
                               {{$split[0]}}com...</a></p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_5)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_5}}">
                               
                               <?php $address = $productLink->competitor_link_5; ?>
                               <?php $split = explode("com",$address); ?>
                               
                               {{$split[0]}}com...</a></p>
                              <?php } ?>











                              //-- HANDLE SORTING
      if($request->sort) {
          switch($request->sort){
              case 2:
                  $orderColumn = 'total_order';
              break;
              default:
                  $orderColumn = 'product_name';
              break;
                  
          }
      }
      
      //-- HANDLE CATEGORY
      
    $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->orderBy($orderColumn,'ASC')->paginate(5);
    //dd($trendingProducts);

    case 1:
        $filterBy = 'price_under';
      break;
      case 2:
        $filterBy = 'total_order';
      break;
      case 3:
        $filterBy = 'created_at';
      break;
      case 4:
        $filterBy = 'total_order';
      break;
      case 5:
        $filterBy = 'total_order';
      break;
      default:
        $filterBy = 'product_name';
      break;        








      '
            <div class="card shadow">
              <img src="$trendingProduct->productImage[0]->image_link_1." class="card-img-top img-fluid" alt="...">
              <div class="row card-body px-2">
                <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                  <h5 class="card-title">$trendingProduct->product_name.</h5>
                </div> 
                <div class="row mt-3">
                  <div class="col-12 text-center px-3">
                    <?php if ($trendingProduct->explore_star_rating > 1) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating > 2) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating > 3) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating > 4) { ?>
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
              <div class="row px-2 mb-2 rounded justify-content-center">
                <a href="{{$productLink->aliexpress}}" class="cae-view"><img src="{{asset(\'assets/img/aliExpress-logo.png\')}}" class="img-fluid" style="width: 16px; margin: 5px;" alt=""> View on a Demo</a>
              </div>
              @endforeach
            </div>'