@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1> Live Pool Status</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="#">Live Pool Status</a></li>
        </ul>
      </div>
     
     
  <!-- Navs-->
    
    <div class="row justify-content-justify">
      <div class="col-lg-8 mb-2">
               <div class="card">
                   <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                         <li class="nav-item"><a class="nav-link active" href="#">Live Pool Status</a></li>
                      </ul>
                    </div>
                  <div class="card-body">
                <div class="alert alert-light border-secondary shadow" role="alert">
      <div class="row">
      <div class="col-md-6" >
          <div class="tile "  style="background-color:#17a2b8;" >
              <h4 style="color:#fff;">Next pool starts in:</h4>
              <h3 style="color:#fff;"><strong>03:07:12</strong> </h3>
              <br>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile"  style="color:#343a40;">
              <h4>Current Pool : Active</h4>
            <br>
            <div class="tile-body">
            <a href="{{url('user/auto-arbitrage')}}" class="btn btn-info" role="button" title="" data-container="body">Join Pool Now</a>
          </div>
        </div>
        </div>
    
        
      </div>
      
    </div>
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

  </body>

  @stop