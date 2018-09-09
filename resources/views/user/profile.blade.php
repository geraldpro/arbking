@extends('user.layouts.master')
@section('body')

<body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
         <div class="div">
              <h1><i class="fa fa-user-circle-o"></i>My Profile</h1>
         </div>
          <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
        </ul>
      </div>
     
     
  <!-- Navs-->
<div class="tile mb-4">    
<div class="row">
  <div class="col-lg-8">
    <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile">Basic</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#uploadphoto">Financial Details</a>
              </li>
          </ul>
        </div>
      <div class="card-body">
          <div class="alert alert-light border-secondary shadow" role="alert">
             <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="profile">
                     <form class="row" method="post" action="{{url('user/profile/update')}}">
                         <div class="form-group col-md-6">
                             <label for="firstname">Firstname</label>
                                 <input type="text" name='first_name' class="form-control" aria-describedby="emailHelp" value="{{Auth::user() ? Auth::user()->first_name : '' }}">
                         </div>
                   <div class="form-group col-md-6">
                       <label for="lastname">Lastname</label>
                          <input type="text" name="last_name" class="form-control" value="{{Auth::user() ? Auth::user()->last_name : ''}}">
                       </div>
                            <div class="form-group col-md-6">
                               <label for="firstname">Phone Number</label>
                                  <input type="test" name="phone_number" class="form-control" aria-describedby="emailHelp" value="{{Auth::user() ? Auth::user()->phone_number :  '' }}">
                              </div>
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                                <select class="form-control" name="gender" id="exampleSelect1">
                                    <option value="none">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>         
                                </select>
                        </div>
          <!-- </form>
          <form class="row"> -->
            <div class="form-group col-md-6">
               <label for="country">Country</label>
                 <input type="text" name="country" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group col-md-6">
                <label for="date of birth">Date of Birth</label>
                   <input class="form-control" name="dob" id="demoDate" type="text" placeholder="Select date of birth">
            </div>
               <div class="form-group col-md-6">
                  {{ csrf_field() }}
                 <button class="btn btn-success" type="submit">Submit</button>
            </div>
          </form>
        </div> 
          <div class="tab-pane fade" id="uploadphoto">
               <form class="row" method="post" action="{{url('user/profile/update')}}">
                  <div class="form-group col-md-6">
                     <label for="crypto Name">Crypto Name</label>
                        <input  type="text" class="form-control" aria-describedby="emailHelp" value="{{Auth::user() ? Auth::user()->accountType->name : '' }}"  readonly>
                  </div>
                 <div class="form-group col-md-6">
                     <label for="wallet address">Wallet Address</label>
                       <input type="text" name="wallet_address" class="form-control" aria-describedby="emailHelp">
                 </div>
                   <div class="form-group col-md-6">
                        {{ csrf_field() }}
                     <button class="btn btn-info" type="submit">Submit</button>
                   </div>
             </form>
     </div>
    </div>
    </div>
  </div>
</div>  
</div>
<div class="col-lg-4">
            <div class="list-group">
              <div class="list-group-item list-group-item-action active">Manage Account</div>
                  <a href="{{url('user/upload-photo')}}" class="list-group-item list-group-item-action">Upload Photo</a>
                  <a href="{{url('user/change-password')}}" class="list-group-item list-group-item-action">Change Password</a>
                  <a href="{{url('user/profile')}}" class="list-group-item list-group-item-action">Update Profile</a>
            </div>
          </div>
  </div> 
</div>   

</main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
     <!-- Date picker-->
     <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
     <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
    
  </body>

  @stop