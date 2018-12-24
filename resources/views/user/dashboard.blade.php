@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>   
  <!-- Navs-->
    <div class="row">
      <div class="col-lg-12 ">
               <div class="card">
                   <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                         <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                      </ul>
                    </div>
                  <div class="card-body">
                <div class="alert alert-light border-secondary shadow" role="alert">
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
                           <strong> <?php echo Session::get('fail') ?></strong>
                    </div>
            </div>
        </div>
			@endif
                <div class="row" style="margin-top: 30px;">

                    <div class="col-md-6">
                      <div class="tile border ">
                          <h5 class="title" style="color:#343a40;">Matchbet Trading</h5>
                        <div class="tile-body" style="color:#343a40;">
                        <p class="card-text">Lay with us - back with your favorite bookie. Lock in profit.</p>
                        <a href="{{url('user/trade')}}" class="btn btn-info"  role="button" title="" data-container="body"  data-toggle="tooltip" data-placement="left"
                           data-original-title="For every deposit you earn a 50% bonus to shield you from potential trading risks. T&C applies.">Learn more</a>                        
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="tile border">
                          <h5 class="title" style="color:#343a40;">Shield Bonus Calculator</h5>
                        <div class="tile-body" style="color:#343a40;">
                        <p class="card-text">Shield bonus turnover calculator.</p>
                           <a href="{{url('user/bonus-calculator')}}" class="btn btn-info" role="button" title="" data-container="body" data-toggle="tooltip" data-placement="right"
                             data-original-title="Roll over requirement calculator display">Learn more</a>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="tile border">
                            <h5 class="title" style="color:#343a40;">Auto Arbitrage</h5>
                          <div class="tile-body" style="color:#343a40;">
                          <p class="card-text">Sports exchange inplay arbitrage </p>
                          <a href="{{url('user/auto-arbitrage')}}" class="btn btn-info" role="button" title="" data-container="body" data-toggle="tooltip"  data-placement="left"
                            data-content="" data-original-title="Earn 0.5% to 1% daily for investing in Arbking's sports exchange inplay BOT trader. The market pool opens and closes every 24 hours.">Learn more</a>
                          </div>
                        </div>
                      </div>

                    <div class="col-md-6">
                      <div class="tile border">
                          <h5 class="title" style="color:#343a40;">Community Trading Pool</h5>
                        <div class="tile-body" style="color:#343a40;">
                        <p class="card-text">Arbitrage trading for users that couldn't meet the T&C .</p>
                        <a href="{{url('user/livepool-status')}}" class="btn btn-info" role="button" title="" data-container="body" data-toggle="tooltip" data-placement="right"
                           data-original-title="Timer display for daily fund pool">Learn more</a>
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
  <script>
      $('.bs-component [data-toggle="popover"]').popover();
      $('.bs-component [data-toggle="tooltip"]').tooltip();
  </script>
  <!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script>
  $('.tile-body [data-toggle="popover"]').popover();
</script>

</body>

@stop