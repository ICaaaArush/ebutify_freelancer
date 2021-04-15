@extends('layouts.freelancer')
@section('content')

      <div class="content mt-3">
        <div class="col-sm-12">
        
<div class="row mb-3 d-flex justify-content-center">
  <div class="col-lg-10 col-md-6">
  <div class="input-group mb-3 p-1">
  <input type="text" class="form-control" placeholder="Search listed product here... " aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text btncol" id="basic-addon2">Search</span>
  </div>
  </div>
</div>
    
     <div class="col-lg-2 col-md-6 text-right">
<button class="btn mybtn "><a href="{{ route ('uploadPage') }}">Add New Product</a></button>
     </div> 
     
     <div class="row m-2 card p-2 container-fluid">
       <table class="table   table-bordered   d-flex justify-content-center p-3 table-responsive ">
<tr>
  <td>#</td>
  <td>Image</td>
  <td>Product Name</td>
  <td>Price</td>
  <td>Cost</td>
  <td>Profit</td>
  <td>Total order</td>
  <td>Total revinue</td>
  <td>Date</td>
  <td>Uploader Name</td>
  <td>Action</td>
       </tr>

@foreach($productDetails as $productDetail)
<tr>
  <td>{{$productDetail->id}}</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>{{$productDetail->product_name}}</td>
  <td>{{$productDetail->price}}$</td>
  <td>{{$productDetail->cost}}$</td>
  <td>{{$productDetail->profit}}$</td>
  <td>{{$productDetail->total_order}}</td>
  <td>{{$productDetail->total_revenue}}</td>
  <td>{{$productDetail->created_at}}</td>
  <td>{{$productDetail->uploader_name}}</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>
@endforeach

       </table>

       <div class="container">
            <div class="row justify-content-between">
                
                <div class="col-md-2">

                    <!-- PRODUCT LISTING DETAILS START -->
                    <p>Showing {{$productDetails->firstItem() }} to {{$productDetails->lastItem()}} out of {{$productDetails->total()}}</p>
                    <!-- PRODUCT LISTING DETAILS END -->
                </div>
            
            <div class="col-md-2">
                {{ $productDetails->links() }}
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