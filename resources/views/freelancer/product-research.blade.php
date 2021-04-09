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
<button class="btn mybtn "><a href="../pages/upload.html">Add New Product</a></button>
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

<tr>
  <td>01</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks..... </td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>

<tr>
  <td>02</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks.....</td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>

<tr>
  <td>03</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks.....</td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>

<tr>
  <td>04</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks.....</td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>

<tr>
  <td>05</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks.....</td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>

<tr>
  <td>06</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks.....</td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>

<tr>
  <td>07</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks.....</td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>

<tr>
  <td>08</td>
  <td><img src="../images/products.png" width="50px" height="50px" alt=""></td>
  <td>Train Horn For Trucks.....</td>
  <td>$59.99</td>
  <td>50$</td>
  <td>56$</td>
  <td>12</td>
  <td>$501</td>
  <td>04-04-2021</td>
  <td>Md. Rezaul Islam</td>
  <td><button class="btn px-4 mybtn"><a href="../pages/edit.html">Edit</a></button></td>
</tr>


       </table>

            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item ">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="false"><i class="fa fa-caret-left"></i></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">...</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item">
      <a class="page-link" href="#"><i class="fa fa-caret-right"></i></a>
    </li>
  </ul>
</nav>
  
     </div>

    
       
      </div>
      <!-- .content -->
    </div>
    <!-- /#right-panel -->

    <!-- Right Panel -->

@endsection