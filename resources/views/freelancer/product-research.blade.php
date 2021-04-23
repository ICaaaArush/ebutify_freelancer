@extends('layouts.freelancer')
@section('content')

      <div class="content mt-3">
        <div class="col-sm-12">
        
<div class="row mb-3 d-flex justify-content-center">
  <div class="col-lg-10 col-md-6">
  <div class="input-group mb-3 p-1">
  <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names here... " aria-label="Recipient's username">
  </div>
</div>
    
     <div class="col-lg-2 col-md-6 text-right">
<button class="btn mybtn "><a href="{{ route ('uploadPage') }}">Add New Product</a></button>
     </div>
     
     <div class="row m-2 card p-2 container-fluid">
       <table class="table   table-bordered">
        <thead>
        <tr>
          <th>#</th>
          <th>Image</th>
          <th>Product Name</th>
          <th>Price</th>
          <th>Cost</th>
          <th>Profit</th>
          <th>Total order</th>
          <th>Total revinue</th>
          <th>Date</th>
          <th>Uploader Name</th>
          <th>Action</th>
         </tr>
        </thead>
        <tbody id="myTable">
        <?php $i=1 ?>
        @foreach($productDetails as $productDetail)
        
        <tr>
          <td>{{$i}}</td>
          @foreach ($productDetail->productImage as $productImage)
          <td><img src="{{$productImage->image_link_1}}" width="50px" height="50px" alt=""></td>
          @endforeach
          <td>{{$productDetail->product_name}}</td>
          <td>{{$productDetail->price}}$</td>
          <td>{{$productDetail->cost}}$</td>
          <td>{{$productDetail->profit}}$</td>
          <td>{{$productDetail->total_order}}</td>
          <td>{{$productDetail->total_revenue}}</td>
          <td>{{$productDetail->created_at}}</td>
          <td>{{$productDetail->uploader_name}}</td>
          <td><button class="btn px-4 mybtn"><a href="{{ route ('product-edit', ['id' => $productDetail->id]) }}">Edit</a></button></td>
        </tr>
        
        <?php $i++ ?>
        @endforeach
        </tbody>
       </table>
       <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>

        

       <div class="container">
            <div class="row justify-content-between">
                
                <div class="col-md-2">

                    <!-- PRODUCT LISTING DETAILS START -->

                    <!-- PRODUCT LISTING DETAILS END -->
                </div>
            
            <div class="col-md-2">
            </div> 

            </div>
        </div>

  
     </div>
                
       
    </div>
      <!-- .content -->
    </div>
    <!-- /#right-panel -->

    <!-- Right Panel -->

@endsection