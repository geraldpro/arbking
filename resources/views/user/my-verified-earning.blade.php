@extends('user.layouts.master')
@section('body')

<body class="app sidebar-mini rtl">
<main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1>Payouts</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Dashboard</a></li>
          <li class="breadcrumb-item">Payouts</li>
        </ul>
      </div>
     
     
      <!-- Navs-->
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
    <h5 class="section-title text-muted mb-2"> Payouts </h5>
    <form class="row">
          <div class="form-group col-md-8">
              <div class="input-group input-daterange">
              <div class="input-group-addon">Start from</div>
                <input type="text" class="form-control" value="2012-04-05">
                <div class="input-group-addon">to</div>
                <input type="text" class="form-control" value="2012-04-19">
              </div>
            </div>
            <div class=" form-group col-md-4">
                   <a href="#" class="btn btn-outline-secondary"> Search Record </a>
                    <button type="button" data-toggle="modal" class="btn btn-success"> Request Payout </button>
               
               </div>
               <div class="col-md-12">
               <div class="bs-component">
                    <div class="alert alert-dismissible alert-info">
                         <button class="close" type="button" data-dismiss="alert">×</button>
                                 <div class="alert-link" style="text-align:center;">Empty</div>
                          </div>
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
              @foreach($earnings as $earning)
                <tr>
<<<<<<< HEAD
                  <td>January 1st, 2018</td>
                  <td>$3,600.00</td>
                  <th>Paid</th>
=======
                  <td>{{ $earning->updated_at->toDateString() }}</td>
                  <td>{{ $earning->stake_amount }} USD</td>
                  <th>{{Config::get('constants.stake_text.' . $earning->status)}}</th>
>>>>>>> 71291b1ac4f09278615bc913b7cba7c92b1440bd
                </tr>
                @endforeach
                <!-- <tr>
                  <td>May 1st, 2018</td>
                  <td>$7,600.00</td>
                  <th>Pending</th>
                </tr>
                <tr>
                  <td>June 1st, 2018</td>
                  <td>$7,600.00</td>
                  <th>Pending</th>
                </tr> -->
              </tbody>
            </table>
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