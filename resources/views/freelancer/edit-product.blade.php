@extends('layouts.freelancer')
@section('content')

<div class="content mt-3">
  <div class="col-sm-12">
    <div class="card p-2">   
      <h1 class="itext htext p-2">Update Product</h1>
      <hr>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      <form action="{{ route('productUpdate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="product1">

          <input type="hidden" id="id" name="id" value="{{$id}}">

          <input type="hidden" id="productImagesId" name="productImagesId" value="{{$productImages->id}}">

          <input type="hidden" id="productLinksId" name="productLinksId" value="{{$productLinks->id}}">
          
          <input type="hidden" id="uploadername" name="uploadername" value="{{Auth::user()->name}}">
          
          <div class="div1 p-2">
            <div class="itext p-1">Product name</div>
            <input type="text" id="pname" class="form-control" name="pname" value="{{$productDetails->product_name}}">
          </div>

          <div class="div2 p-2">
            <div class="itext p-1">Price</div>
            <input type="number" id="price" class="form-control cost" name="price" step=".01" value="{{$productDetails->price}}">
          </div>

          <div class="div2 p-2">
            <div class="itext p-1">Cost</div>
            <input type="number" id="cost" class="form-control cost" name="cost" step=".01" value="{{$productDetails->cost}}">
          </div>

          <div class="div3 p-2">
            <div class="itext p-1">Profit</div>
            <input type="number" id="prodit" class="form-control profit" name="profit" step=".01" value="{{$productDetails->price}}">
          </div>
          <div class="div4 p-2">
            <div class="itext p-1">Total order</div>
            <input type="number" id="torder" class="form-control order" name="torder" step=".01" value="{{$productDetails->total_order}}">
          </div>

          <div class="div5 p-2">
            <div class="itext p-1">Total revinue</div>
            <input type="number" id="trevinue" class="form-control" name="trevinue" step=".01" value="{{$productDetails->total_revenue}}">
          </div>

          <div class="div6 p-2">
            <div class="itext p-1">Alexa Rank</div>
            <input type="number" id="alexa" class="form-control" name="alexarank" step=".01" value="{{$productDetails->alexa_rank}}">
          </div>

          <div class="div7 p-2">
          <div class="itext p-1"> Oppotunity level</div>
          <select multiple="multiple" name="opportunity[]" id="opportunity" class="form-control level">
            <option value="facebook_ads" @if ($containsF == true)
                    selected="selected"
                @endif>Facebook ads</option>
            <option value="trending_product" @if ($containsT == true)
                    selected="selected"
                @endif>Trending product</option>
            <option value="untapped_product" @if ($containsU == true)
                    selected="selected"
                @endif>Untapped product</option>
          </select>
          </div>
        </div>       


        <div class="product1">
          <div class="div1 p-2">
            <div class="itext p-1">AliExpress Link</div>
            <input type="text" id="aliexpress" class="form-control space" name="aliexpress" value="{{$productLinks->aliexpress}}">
          </div>

          <div class="div2 p-2">
            <div class="itext p-1">Facebook ads link</div>
            <input type="text" id="fbadd" class="form-control space" name="fbadd" value="{{$productLinks->facebook_ad}}">
          </div>

          <div class="div3 p-2">
            <div class="itext p-1"> Google trends link</div>
            <input type="text" id="google" class="form-control space" name="google" value="{{$productLinks->google_trend}}">
          </div>

          <div class="div4 p-2">
            <div class="itext p-1"> Youtube link</div>
            <input type="text" id="youtube" class="form-control space" name="youtube" value="{{$productLinks->youtube}}">
          </div>

          <div class="div5 p-2">
            <div class="itext p-1"> Shopify website link</div>
            <input type="text" id="shopify" class="form-control space" name="shopify" value="{{$productLinks->shopify}}">
          </div>
        </div>

        <div class="row p-2">
          <div class="col-lg-7 col-md-6">
            <div class="row">
              <div class="col-4">
                <table class="table table-bordered">
                  <tr>
                    <td><div class="itext">Product Image link</div> </td>       
                  </tr>
                  <tr>
                    <td><input type="text" id="img1" class="form-control" name="img1" value="{{$productImages->image_link_1}}"></td>
                  </tr>

                  <tr>
                    <td><input type="text" id="img2" class="form-control" name="img2" value="{{$productImages->image_link_2}}"></td>   
                  </tr>

                  <tr>
                    <td><input type="text" id="img3" class="form-control" name="img3" value="{{$productImages->image_link_3}}"></td>
                  </tr>
                       
                  <tr>
                    <td><input type="text" id="img4" class="form-control" name="img4" value="{{$productImages->image_link_4}}"></td>    
                  </tr>
                  
                  <tr>
                    <td><input type="text" id="img5" class="form-control" name="img5" value="{{$productImages->image_link_5}}"></td>
                  </tr>
                </table>
              </div>

              <div class="col-4">
                <table class="table table-bordered">
                  <tr>
                    <td><div class="itext">Competitor link</div> </td>
                  </tr>
                  
                  <tr>
                    <td><input type="text" id="competitor1" class="form-control" name="competitor1" value="{{$productLinks->competitor_link_1}}"></td>
                  </tr>

                  <tr>
                    <td><input type="text" id="competitor2" class="form-control" name="competitor2" value="{{$productLinks->competitor_link_2}}"></td>
                  </tr>

                  <tr>
                    <td><input type="text" id="competitor3" class="form-control" name="competitor3" value="{{$productLinks->competitor_link_3}}"></td>
                  </tr>
                     
                  <tr>
                    <td><input type="text" id="competitor4" class="form-control" name="competitor4" value="{{$productLinks->competitor_link_4}}"></td>
                  </tr>
                     
                  <tr>
                    <td><input type="text" id="competitor5" class="form-control" name="competitor5" value="{{$productLinks->competitor_link_5}}"></td>
                  </tr>
                </table>
              </div>

              <div class="col-4">
                
                <table class="table table-bordered">
                  <tr>
                    <td> <div class="itext">Update gif image</div> </td>
                  </tr>
                  <tr>
                    <td>
                    <div class="form-group">
                      <img src="{{asset('storage/'.$productImages->gif_1)}}">
                      <input type="file" class="form-control-file" id="gif1" name="gif1">
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <img src="{{asset('storage/'.$productImages->gif_2)}}">
                        <input type="file" class="form-control-file" id="gif2" name="gif2">
                      </div>  
                    </td>
                  </tr>
                  <tr>
                  <td>
                    <div class="form-group">
                      <img src="{{asset('storage/'.$productImages->gif_3)}}">
                      <input type="file" id="gif3" class="form-control-file" name="gif3">               
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
                  <div class="itext p-1"> Amazon link</div>
                  <input type="text" id="amazon" class="form-control space" name="amazon" value="{{$productLinks->amazon}}">
                </div>
                <div class="div4 p-2">
                  <div class="itext p-1"> eBay link</div>
                  <input type="text" id="ebay" class="form-control space " name="ebay" value="{{$productLinks->ebay}}">
                </div>
            </div>

            <div class="row p-3">
              <textarea class="form-control  pb-5 " placeholder="Input product Tag using Coma" name="tag" id="tag">{{$productDetails->tag}}</textarea>
            </div>
          </div>
        </div>

        <div class="row p-2 ">
          <div class="col-7">
            <div class="row ">
              <div class="col-4 mb-5">
                <table class="table table-bordered ">
                  <tr>
                    <tr>
                      <td> <div class="itext">Update Customer Age</div> </td>
                    </tr>
                  </tr>
                  <tr>
                    <td>
                      <select multiple="multiple" class="selectpicker form-control p-1" name="age[]" id="age" multiple data-live-search="true" required="">
                        <option  @if ($containsUnder18 == true)
                    selected="selected"
                @endif>Under 18</option>
                        <option @if ($containsUnder1824 == true)
                    selected="selected"
                @endif>18-24</option>
                        <option
                        @if ($containsUnder2534 == true)
                    selected="selected"
                @endif>25-34</option>
                        <option
                        @if ($containsUnder3444 == true)
                    selected="selected"
                @endif>34-44</option>
                        <option
                        @if ($containsUnder4554 == true)
                    selected="selected"
                @endif>45-54</option>
                        <option
                        @if ($containsUnder5564 == true)
                    selected="selected"
                @endif>55-64</option>
                        <option
                        @if ($containsUnder65 == true)
                    selected="selected"
                @endif>65+</option>
                      </select>
                    </td>
                  </tr>
                  </table>
                </div>
              <div class="col-4 mb-1">
                <table class="table table-bordered">
                  <tr>
                    <tr>
                      <td> <div class="itext">Update Gender</div> </td>
                    </tr>
                  </tr>
                  <tr>
                    <td>
                      <select multiple="multiple" class="selectpicker form-control" name="gender[]" id="gender" multiple data-live-search="true" required="">
                        <option @if ($containsMen == true)
                    selected="selected"
                @endif>Men</option>
                        <option @if ($containsWomen == true)
                    selected="selected"
                @endif>Women</option>
                        <option @if ($containsBaby == true)
                    selected="selected"
                @endif>Baby</option>
                        <option @if ($containsUnisex == true)
                    selected="selected"
                @endif>Unisex</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-4">
                <table class="table table-bordered">
                  <tr>
                    <td> <div class="itext">Update Category</div> </td>
                  </tr>
                  <tr>
                    <td>
                      <input id="category" class="form-control" name="category" value="{{$productDetails->category}}">
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-4">
                <table class="table table-bordered">
                  <tr>
                    <td> <div class="itext">Update Type</div> </td>
                  </tr>
                  <tr>
                    <td>
                      <select class="selectpicker form-control p-1" name="type" id="type" multiple data-live-search="true" required="">
                        <option value="1" @if ($containsSa == true)
                    selected="selected"
                @endif>Saturated</option>
                        <option value="2" @if ($containsUn == true)
                    selected="selected"
                @endif>Unsaturated</option>
                      </select>

                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-5">
                <table class="table table-bordered">
                  <tr>
                    <td> <div class="itext">Update Status</div> </td>
                  </tr>
                  <tr>
                    <td>
                      <select multiple="" class="selectpicker form-control p-1" name="status" id="status" multiple data-live-search="true" required="">
                        <option @if ($containsAv == true)
                    selected="selected"
                @endif>Available</option>
                        <option @if ($containsUnav == true)
                    selected="selected"
                @endif>Unavailable</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-6 ">
                <table class="table table-bordered">
                  <tr>
                    <td><div class="itext">Product Video link</div> </td>       
                  </tr>
                  <tr>
                    <td><input type="text" id="video" class="form-control" name="video" value="{{$productImages->video_link}}"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="row p-3">         
              <textarea class="form-control pb-5" cols="20" placeholder="input selling  country using Coma" name="country" id="country">{{$productDetails->country}}</textarea>
            </div>
          </div>
        </div>

        <div class="row p-3">
              <textarea placeholder="write description here " class="form-control description" name="desc" id="desc" cols="30" rows="10">{{$productDetails->description}}</textarea>
        </div>

        <div class="d-flex justify-content-end  m-2">
            <button type="submit" class="btn text-right  mybtn"><a class="text-right"></a>Update Product</button>
        </div>
      </form>
    </div>
  </div>
      <!-- .content -->
</div>
    <!-- /#right-panel -->

    <!-- Right Panel -->
@endsection

@section('js')
    
<script>
    tinymce.init({
      mode : "specific_textareas",
      editor_selector : "description",
      plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      toolbar_mode: 'floating',
    });
</script>

@endsection