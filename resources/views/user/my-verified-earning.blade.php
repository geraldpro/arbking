@extends('user.layouts.master')
@section('body')

<body class="app sidebar-mini rtl">
<main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> My Verified Earning</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">My Verified Earning</a></li>
        </ul>
      </div>
     
     
      <!-- Navs-->
      <div class="tile mb-4">
        
        <div class="row">
                <div class="col-lg-12 mb-3">
                  <div class="card-mb-4">
                    <div class="card">
                      <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                <a class="nav-link active" href="#">Payout</a>
                              </li>
                                </ul>
                              </div>
                              <div class="card-body">
                               <div class="alert alert-light border-secondary shadow" role="alert">
                               <h5 class="section-title text-muted mb-2"> Earnings </h5>
                               <div class="row">
        <div class="col-md-4">
          <div class="tile bg-info">
              <h4 class="title">Verified Earnings :</h4>
            <div class="tile-body">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-success">
              <h4 class="title">Paid Earnings :</h4>
            <div class="tile-body">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-warning">
              <h4 class="title" style="color:#000";>Pending Earnings :</h4>
            <div class="tile-body">
            </div>
          </div>
        </div>
      </div>
    </div>
    <h5 class="section-title text-muted mb-2"> Earnings </h5>
    <form class="row">
            <div class="form-group col-md-10">
              <div class="input-group input-daterange">
              <div class="input-group-addon">Start from</div>

                <input type="text" class="form-control" value="2012-04-05">
                <div class="input-group-addon">to</div>
                <input type="text" class="form-control" value="2012-04-19">
              </div>
            </div>
            <div class="form-group col-md-2">
            <div class="input-group">
                <button class="btn btn-success" type="button">Search Record</button>
              </div>
            </div>
          </form>
          <div class="row">
          <div class="col-md-12">
          <div class="alert alert-light border-secondary shadow">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Amount</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>January 1st, 2018</td>
                  <td>₦3,600.00</td>
                  <th>Paid</th>
                </tr>
                <tr>
                  <td>May 1st, 2018</td>
                  <td>₦7,600.00</td>
                  <th>Pending</th>
                </tr>
                <tr>
                  <td>June 1st, 2018</td>
                  <td>₦7,600.00</td>
                  <th>Pending</th>
                </tr>
              </tbody>
            </table>
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
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
     <!-- Date picker-->
     <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('.input-daterange input').each(function() {
         $(this).datepicker('clearDates');
      });
    </script>

    </body>

@stop