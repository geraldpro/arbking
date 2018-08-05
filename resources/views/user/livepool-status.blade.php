@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
     
     
  <!-- Navs-->
  <div class="tile mb-4">
    
    <div class="row">
      <div class="col-lg-12 mb-3">
               <div class="card">
                   <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                         <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                      </ul>
                    </div>
                  <div class="card-body">
                <div class="alert alert-light border-secondary shadow" role="alert">
      <div class="row">
        <div class="col-md-4">
          <div class="tile bg-success">
              <h5>Current Pool</h5>
            <div class="tile-body">
             <h4>$500</h4>
              <a href="#" class="btn btn-warning">Start Trading</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-success">
              <h5>Pool Cap</h5>
            <div class="tile-body">
             <p style="font-size:14px;">$2000</p>
            </div>
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