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
     
        @if (Session::has('success'))
        <div class="card-body">
       <div class="col-lg-12" style="padding: 0px;">
          <div class="bs-component">
            <div class="alert alert-dismissible alert-success">
              <button class="close" type="button" data-dismiss="alert">×</button>
              <strong>{{ Session::get('success') }}</strong>
            </div>
          </div>
        </div>
			@elseif (Session::has('fail'))
                <div class="col-lg-12" style="padding: 0px;">
               <div class="bs-component">
                    <div class="alert alert-dismissible alert-danger">
                         <button class="close" type="button" data-dismiss="alert">×</button>
                           <strong> {{ Session::get('fail') }}</strong>
                    </div>
            </div>
        </div>
			@endif   
  <!-- Navs-->
<div class="tile mb-4">
    
<div class="row">
  <div class="col-lg-8">
    <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile">Upload Photo</a>
            </li>
             
          </ul>
        </div>
      <div class="card-body">
          <div class="alert alert-light border-secondary shadow" role="alert">
          <div class="tab-content" id="myTabContent"> 
          <div class="tab-pane fade active show" id="uploadphoto">
            <form method="post" action="{{URL::route('changePicture')}}" enctype="multipart/form-data">
                <div class="form-group {{ ($errors->has('profile_image')) ? 'has-error' : ''}}">
                  <label for="exampleFormControlFile1">Choose a picture to Upload</label>
                    <input type="file" class="form-control" name="profile_image" >
                    @if ($errors->has('profile_image'))
											<span style="color: palevioletred;">{{ $errors->first('profile_image') }}</span>
										@endif
              </div>
              {{ csrf_field() }}
              <button class="btn btn-info" type="submit">Submit</button>

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