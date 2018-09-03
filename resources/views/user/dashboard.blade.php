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
                    <div class="col-md-6">
                      <div class="tile bg-dark">
                          <h5 class="title">MATCH-BET TRADING</h5>
                        <div class="tile-body">
                        <p class="card-text">Lay with us - back with your favorite bookie. Lock in profit.</p>
                        <button class="btn btn-secondary btn-success" type="button" title="" data-container="body" data-toggle="popover" data-placement="top"
                            data-content="Lay with us - back with your favorite bookie. Lock in profit." data-original-title="Match-bet trading">Learn more</button>                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="tile bg-dark">
                          <h5>SHIELD BONUS CALCULATOR</h5>
                        <div class="tile-body">
                        <p class="card-text">Shield bonus turnover calculator.</p>
                           <button class="btn btn-secondary btn-success" type="button" title="" data-container="body" data-toggle="popover" data-placement="top"
                            data-content="Shield bonus turnover calculator." data-original-title="Shield bonus calculator">Learn more</button>
                        </div>
                      </div>
                    </div>
                 </div>
      <div class="row">
      <div class="col-md-6">
          <div class="tile bg-dark">
              <h5 class="title">AUTO ARBITRAGE</h5>
            <div class="tile-body">
            <p class="card-text">Sports exchange inplay arbitrage (For Individual matchbook.com account owners.)</p>
            <button class="btn btn-secondary btn-success" type="button" title="" data-container="body" data-toggle="popover" data-placement="top"
              data-content="Sports exchange inplay arbitrage (For Individual matchbook.com account owners.)" data-original-title="Auto arbitrage">Learn more</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile bg-dark">
              <h5 class="title">COMMUNITY TRADING POOL</h5>
            <div class="tile-body">
            <p class="card-text">Arbitrage trading for users that couldn't meet the T&C for individual matchbook.com account.</p>
            <button class="btn btn-secondary btn-success" type="button" title="" data-container="body" data-toggle="popover" data-placement="top"
              data-content="Arbitrage trading for users that couldn't meet the T&C for individual matchbook.com account" data-original-title="Community trading pool">Learn more</button>
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
<script>
    $('.tile-body [data-toggle="popover"]').popover();
</script>

</body>

  @stop