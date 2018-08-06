@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-user-circle-o"></i>Change Password</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Change Password</a></li>
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
                <a class="nav-link active" data-toggle="tab" href="#profile">Change Password</a>
            </li>
          </ul>
        </div>
      <div class="card-body">
          <div class="alert alert-light border-secondary shadow" role="alert">
          <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade active show" id="profile">
            <form class="row">
            <div class="form-group col-md-12">
              <label for="oldpassword">Current Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="lastname">New Password</label>
              <input type="newpassword" class="form-control">
            </div>
            <div class="form-group col-md-12">
              <label for="lastname">Confirm Password</label>
              <input type="newpassword" class="form-control">
            </div>
          </form>
         <button class="btn btn-success" type="button">Change Password</button>
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
              <a href="accountsettings" class="list-group-item list-group-item-action">Update Financial details</a>
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