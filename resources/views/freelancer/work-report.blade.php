@extends('layouts.freelancer')
@section('content')

      <div class="content mt-3">
        <div class="col-sm-12">
        <div class="row d-flex justify-content-center">
          <span class="btn mybtn m-2"><a href="">Product Research</a></span>
          <span class="btn mybtn m-2"><a href="">Store Create</a></span>
          <span class="btn mybtn m-2"><a href="">Customization</a></span>
          <span class="btn mybtn m-2"><a href="">Copywriting</a></span>
          <span class="btn mybtn m-2"><a href="">Marketing</a></span>
          <span class="btn mybtn m-2"><a href="">Fulfillment</a></span>
          <span class="btn mybtn m-2"><a href="">Manager</a></span>
          <span class="btn mybtn m-2"><a href="">Daily Task</a></span>
        </div>

       

    
       
<div class="row m-2 p-2 card1 display" >
  <div class="col-lg-4 col-md-6 card p-3">
      <div class="row ">
         <div class="col-6 ">
           <div class="itext pl-1">To Do</div>
         </div>

         <div class="col-6 text-right"><i class="fa itext pr-2 fa-ellipsis-h" aria-hidden="true"></i></div>
       </div>

       <div  data-toggle="modal" data-target="#exampleModalCenter" class="card1 mt-2 mb-3 p-2">

    <span><img src="{{asset('images/admin.jpg')}}" class="img2 mx-2" width="30px" height="30px" alt=""></span>
<span class="itext">Md Riazul Islam</span>
<span><img src="{{asset('images/admin.jpg')}}" width="25px" height="25px" class="img2 ml-5" alt=""></span> 

<div class="row mt-2">
  <div class="col-7 ">
<span class=""><button class="btn mt-2 btnp textw p-1">Client</button></span>
<span><img src="{{asset('images/p.png')}}" width="35px" height="35px" class="img2 p-1"  alt=""></span>
<span class="itext p-1">Nadia Alin</span>
  </div>

  <div class="col-5 pt-2">
<div class="progress">
  <div class="progress-bar purple" role="progressbar " style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div> <span></div>
  </div>
</div>
<div class="mt-4">
 <span class="btnp p-1"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="textw">Due Time: 04 April -10 April</span> </span>
 <span class="pl-4"><i class="fa fa-check-square ptext" aria-hidden="true"></i> 5/9</span>
</div>
<br>
  


       </div>

       <div  data-toggle="modal" data-target="#exampleModalCenter"  class="card1 mt-2 mb-3 p-2">

    <span><img src="{{asset('images/admin.jpg')}}" class="img2 mx-2" width="30px" height="30px" alt=""></span>
<span class="itext">Md Riazul Islam</span>
<span><img src="{{asset('images/admin.jpg')}}" width="25px" height="25px" class="img2 ml-5" alt=""></span> 

<div class="row mt-2">
  <div class="col-7 ">
<span class=""><button class="btn mt-2 btnp textw p-1">Client</button></span>
<span><img src="{{asset('images/p.png')}}" width="35px" height="35px" class="img2 p-1"  alt=""></span>
<span class="itext p-1">Nadia Alin</span>
  </div>

  <div class="col-5 pt-2">
<div class="progress">
  <div class="progress-bar purple" role="progressbar " style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div> <span></div>
  </div>
</div>
<div class="mt-4">
 <span class="btnp p-1"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="textw">Due Time: 04 April -10 April</span> </span>
 <span class="pl-4"><i class="fa fa-check-square ptext" aria-hidden="true"></i> 5/9</span>
</div>
  <br>
<button class="btn border"><a href="#">Add new Cart</a></button>
       </div>
   </div>
  <div class="col-lg-4 col-md-6 card m-2 p-3" >
      <div class="row">
         <div class="col-6 ">
           <div class="itext pl-1"> Doing</div>
         </div>

         <div class="col-6 text-right"><i class="fa itext pr-2 fa-ellipsis-h" aria-hidden="true"></i></div>
       </div>

       <div  data-toggle="modal" data-target="#exampleModalCenter"  class="card1  mt-2 mb-3 p-2" >

    <span><img src="{{asset('images/admin.jpg')}}" class="img2 mx-2" width="30px" height="30px" alt=""></span>
<span class="itext">Md Riazul Islam</span>
<span><img src="{{asset('images/admin.jpg')}}" width="25px" height="25px" class="img2 ml-5" alt=""></span> 

<div class="row mt-2">
  <div class="col-7 ">
<span class=""><button class="btn mt-2 textw btnp p-1">Client</button></span>
<span><img src="{{asset('images/p.png')}}" width="35px" height="35px" class="img2 p-1"  alt=""></span>
<span class="itext p-1">Nadia Alin</span>
  </div>

  <div class="col-5 pt-2">
<div class="progress">
  <div class="progress-bar purple" role="progressbar " style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div> <span></div>
  </div>
</div>
<div class="mt-4">
  <span class="btnp p-1"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="textw">Due Time: 04 April -10 April</span> </span>
 <span class="pl-4"><i class="fa fa-check-square ptext" aria-hidden="true"></i> 5/9</span>
</div>
  <br>

       </div>

       <div class="card1 mt-2 mb-3 p-2"  data-toggle="modal" data-target="#exampleModalCenter">

    <span><img src="{{asset('images/admin.jpg')}}" class="img2 mx-2" width="30px" height="30px" alt=""></span>
<span class="itext">Md Riazul Islam</span>
<span><img src="{{asset('images/admin.jpg')}}" width="25px" height="25px" class="img2 ml-5" alt=""></span> 

<div class="row mt-2">
  <div class="col-7 ">
<span class=""><button class="btn mt-2 textw btnp p-1">Client</button></span>
<span><img src="{{asset('images/p.png')}}" width="35px" height="35px" class="img2 p-1"  alt=""></span>
<span class="itext p-1">Nadia Alin</span>
  </div>

  <div class="col-5 pt-2">
<div class="progress">
  <div class="progress-bar purple" role="progressbar " style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div> <span></div>
  </div>
</div>
<div class="mt-4">
 <span class="btnp p-1"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="textw">Due Time: 04 April -10 April</span> </span>
 <span class="pl-4"><i class="fa fa-check-square ptext" aria-hidden="true"></i> 5/9</span>
</div>
  <br>

       </div>
   </div>

    <div class="col-lg-3 m-2 col-md-6 card p-3">
      <div class="row">
         <div class="col-6 ">
           <div class="itext pl-1"> Done</div>
         </div>

         <div class="col-6 text-right"><i class="fa itext pr-2 fa-ellipsis-h" aria-hidden="true"></i></div>
       </div>

       <div class="card1 mt-2 mb-3 p-2"  data-toggle="modal" data-target="#exampleModalCenter">

    <span><img src="{{asset('images/admin.jpg')}}" class="img2 mx-2" width="30px" height="30px" alt=""></span>
<span class="itext">Md Riazul Islam</span>
<span><img src="{{asset('images/admin.jpg')}}" width="25px" height="25px" class="img2 ml-5" alt=""></span> 

<div class="row mt-2">
  <div class="col-7 ">
<span class=""><button class="btn mt-2 btnp textw p-1">Client</button></span>
<span><img src="{{asset('images/p.png')}}" width="35px" height="35px" class="img2 p-1"  alt=""></span>
<span class="itext p-1">Nadia </span>
  </div>

  <div class="col-5 pt-2">
<div class="progress">
  <div class="progress-bar purple" role="progressbar " style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div> <span></div>
  </div>
</div>
<div class="mt-4">
  <span class="btnp p-1"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="textw">Due Time: 04 April -10 April</span> </span>
 <span class="pl-4"><i class="fa fa-check-square ptext" aria-hidden="true"></i> 5/9</span>
</div>
  <br>

       </div>

       <div  data-toggle="modal" data-target="#exampleModalCenter" class="card1 mt-2 mb-3 p-2">

    <span><img src="{{asset('images/admin.jpg')}}" class="img2 mx-2" width="30px" height="30px" alt=""></span>
<span class="itext">Md Riazul Islam</span>
<span><img src="{{asset('images/admin.jpg')}}" width="25px" height="25px" class="img2 ml-5" alt=""></span> 

<div class="row mt-2">
  <div class="col-7 ">
<span class=""><button class="btn mt-2 btnp textw p-1">Client</button></span>
<span><img src="{{asset('images/p.png')}}" width="35px" height="35px" class="img2 p-1"  alt=""></span>
<span class="itext p-1">Nadia </span>
  </div>

  <div class="col-5 pt-2">
<div class="progress">
  <div class="progress-bar purple" role="progressbar " style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div> <span></div>
  </div>
</div>
<div class="mt-4">
 <span class="btnp p-1"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="textw">Due Time: 04 April -10 April</span> </span> <br>
<br> <span class="pl-4 btn bg-success radius"><i class="fa fa-check-square text-light " aria-hidden="true"></i>  <span  class=" text-light">5/9</span> </span>
</div>
  <br>

       </div>
   </div>
   
</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Product Research Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
         <table class="table table-bordered">
            <tr>
              <td class="text-center">Freelancer Details </td>
              <td class="text-center">Client Details</td>
            </tr>

            <tr>
              <td>
                <div class="row">
                  <div class="col-4">
                    <img src="{{asset('images/admin.jpg')}}" class="img11" alt="">
                  </div>
                  <div class="col-8">
                    <ul class="list">
                      <li>Md. Rezaul islam</li>
                      <li>Position: Product Researcher</li>
                      <li>Join Data: 01-04-2021</li>
                     <li>Task Completed: 22</li> 
                    </ul>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-4">
                    <img src="{{asset('images/p.png')}}" class="img11" alt="">
                  </div>
                  <div class="col-8">
                    <ul class="list">
                      <li>Nadia Alin</li>
                      <li>Job Post: Product Researcher</li>
                      <li>Hire Data: 01-04-2021</li>
                      <li>Total paid: $350</li>
                    </ul>
                  </div>
                </div>
              </td>
            </tr>
         </table>
       </div>
<div class="row">
  <div class="col-lg-8 col-md-6">
    <div class="itext p-2">Job Description</div>
    <div class="card1 p1 p-2">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quae ipsum vel accusamus, ipsa nostrum repudiandae. Possimus, dolorem reiciendis asperiores nisi, enim animi perferendis dolor iste voluptas inventore deserunt consequuntur?</p> <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quae ipsum vel accusamus, ipsa nostrum repudiandae. Possimus, dolorem reiciendis asperiores nisi, enim animi perferendis dolor iste voluptas inventore deserunt consequuntur?</p> <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quae ipsum vel accusamus, ipsa nostrum repudiandae. Possimus, dolorem reiciendis asperiores nisi, enim animi perferendis dolor iste voluptas inventore deserunt consequuntur?</p>
    </div>
  </div>
  <div class="col-lg-4 col-md-6">
    <div>
<span class="btnp d-block p-2 p2"><i class="fa fa-clock-o" aria-hidden="true"></i> Start date: 04 April -10 April</span> 
    </div>
    <br>
    <div>
 <span class="btnp d-block p-2 p2"><i class="fa fa-clock-o" aria-hidden="true"></i> Start date: 04 April -10 April</span> 
    </div>

    <div class="card1 p-2 m-2">
      <div class="itext">Card owner & Modarator</div>
      <div class="card-img-top d-flex justify-content-center">
        <img src="{{asset('images/admin.jpg" class="img-fluid " width="100%" alt="">
      </div>
      <div class="itext">Engr. Md. Rezaul Islam</div>
      <div class="itext">CEO & Founder eButify</div>
    </div>
   
  </div>

  <div>

  </div>

  <div class="p-3 check">



 
  </div>

 
 
  
</div>

<div>
<h4 class="itext text-left m-2">Checklist</h4>
</div>

<div class="progress">
  <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
 
<div>
  <br>
 <form action="/action_page.php">
      <input type="checkbox" id="c1" name="c1" value="c1">
      <label for="c1"> Create Task For Everyone</label><br>
      <input type="checkbox" id="c2" name="c2" value="c2">
      <label for="c2"> Make Checklist For everyone</label><br>
      <input type="checkbox" id="c3" name="c3" value="c3">
      <label for="c3"> Notify Everyone for the onboarding meeting</label><br>
       <input type="checkbox" id="c4" name="c4" value="c4">
      <label for="c3"> Take daily attendance</label><br>
       <input type="checkbox" id="c4" name="c4" value="c3">
      <label for="c3"> Make payment report</label><br>
       <input type="checkbox" id="c3" name="c3" value="c3">
      <label for="c3"> Product research from spy Tool</label><br>
       <input type="checkbox" id="c3" name="c3" value="c3">
      <label for="c3"> Research Aliexpress Product</label><br>
       <input type="checkbox" id="c3" name="c3" value="c3">
      <label for="c3"> Submitted To Manager</label><br>
      
</form>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        
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