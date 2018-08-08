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
          <div class="tile bg-dark">
              <h5>Trade Volume</h5>
            <div class="tile-body">
             <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-warning">Start Trading</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-dark">
              <h5 class="title">Trade Statistics</h5>
            <div class="tile-body">
            <p class="card-text">Next Deposit Moneyshield Percentage: <span class="text-danger">60%</span></p>
              <a href="{{url('user/fund-my-account')}}" class="btn btn-success">Get Deposit</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-dark">
              <h5 class="title">Trade Balance</h5>
            <div class="tile-body">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="tile bg-light">
              <h5>Trade Volume</h5>
            <div class="tile-body">
             <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-warning">Start Trading</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-light">
              <h5 class="title" style="color:#000";>Trade Statistics</h5>
            <div class="tile-body">
            <p class="card-text">Next Deposit Moneyshield Percentage: <span class="text-danger">60%</span></p>
              <a href="#" class="btn btn-success">Get Deposit</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-light">
              <h5 class="title">Trade Balance</h5>
            <div class="tile-body">
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