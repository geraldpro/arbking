@extends('admin.layouts.master')
@section('body')
 
  <body class="app sidebar-mini rtl">
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil-square-o"></i> Edit Match</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Edit Match</a></li>
        </ul>
      </div>
      <div class="row">
      @if (Session::has('success'))
        <div class="card-body">
       <div class="col-lg-12" style="padding: 0px;">
          <div class="bs-component">
            <div class="alert alert-dismissible alert-success">
              <button class="close" type="button" data-dismiss="alert">×</button>
              <strong>{{ Session::get('success') }}</strong>
              <!-- <a class="alert-link" href="#">this important alert message</a>. -->
            </div>
          </div>
        </div>
				@elseif (Session::has('fail'))
                <div class="col-lg-12" style="padding: 0px;">
               <div class="bs-component">
                    <div class="alert alert-dismissible alert-danger">
                         <button class="close" type="button" data-dismiss="alert">×</button>
                           <strong> {{ Session::get('fail') }}</strong>
                                 <!-- <a class="alert-link" href="#">Change a few things up</a> and try submitting again. -->
                    </div>
            </div>
        </div>
			@endif
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Edit Match</h3>
            <div class="tile-body">
              <form method="POST" action="{{ route('editMatch') }}">
                <div class="form-group {{ ($errors->has('league')) ? 'has-error' : ''}}">
                  <label class="control-label">League</label>
                  <input class="form-control" name="league" type="text" value="{{$match->league}}" placeholder="Enter League name">
                  @if ($errors->has('league'))
									<span style="color: palevioletred;">{{ $errors->first('league') }}</span>
								@endif
                </div>
                <div class="form-group {{ ($errors->has('home_team')) ? 'has-error' : ''}}">
                  <label class="control-label">Home Team</label>
                  <input class="form-control" value="{{$match->home_team}}"  name="home_team" type="text" placeholder="Enter Home Team">
                  @if ($errors->has('home_team'))
									<span style="color: palevioletred;">{{ $errors->first('home_team') }}</span>
								@endif
                </div>
                <div class="form-group {{ ($errors->has('away_team')) ? 'has-error' : ''}}">
                  <label class="control-label">Away Team</label>
                  <input class="form-control" value="{{$match->away_team}}" type="text" name="away_team" placeholder="Enter Away Team">
                  @if ($errors->has('away_team'))
									<span style="color: palevioletred;">{{ $errors->first('away_team') }}</span>
								@endif
                </div>
                <div class="form-group {{ ($errors->has('kickoff')) ? 'has-error' : ''}}">
                  <label class="control-label">Kick off</label>
                  <input class="form-control" value="{{$match->kickoff}}" type="text" name="kickoff" placeholder="Enter Kick off">
                  @if ($errors->has('kickoff'))
									<span style="color: palevioletred;">{{ $errors->first('kickoff') }}</span>
								@endif
                </div>
                <div class="form-group  {{ ($errors->has('selected_market')) ? 'has-error' : ''}}">
                  <label class="control-label">Selected Market</label>
                  <input class="form-control" value="{{$match->selected_market}}" type="text" name="selected_market" placeholder="Enter Selected Market">
                  @if ($errors->has('selected_market'))
									<span style="color: palevioletred;">{{ $errors->first('selected_market') }}</span>
								@endif
                </div>
                <div class="form-group {{ ($errors->has('selected_odd')) ? 'has-error' : ''}}">
                  <label class="control-label">Selected Odd</label>
                  <input class="form-control" value="{{$match->selected_odd}}" type="text" name="selected_odd" placeholder="Enter Selected Odd">
                  @if ($errors->has('selected_odd'))
									<span style="color: palevioletred;">{{ $errors->first('selected_odd') }}</span>
								@endif
                </div>
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <input type="hidden" name="id" id="csrf-token" value="{{ $match->id }}" />
            </div>
            <div class="tile-footer">
              <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
            </form>
          </div>
        </div>
        <div class="clearix"></div>
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
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Red"
      	},
      	{
      		value: 50,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Green"
      	},
      	{
      		value: 100,
      		color: "#FDB45C",
      		highlight: "#FFC870",
      		label: "Yellow"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxb = $("#barChartDemo").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data);
      
      var ctxr = $("#radarChartDemo").get(0).getContext("2d");
      var radarChart = new Chart(ctxr).Radar(data);
      
      var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
      var polarChart = new Chart(ctxpo).PolarArea(pdata);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
      
      var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
      var doughnutChart = new Chart(ctxd).Doughnut(pdata);
    </script>
    
  </body>
</html>
@stop