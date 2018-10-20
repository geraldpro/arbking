@extends('admin.layouts.master')
@section('body')
<?php $index = 0 ?>
  <body class="app sidebar-mini rtl">
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-eye"></i> View Matches</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">View Matches</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Match Listing</h3>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Home Team</th>
                  <th>Away Team</th>
                  <th>Match Date</th>
                  <th>Activity</th>

                </tr>
              </thead>
              <tbody>
              @foreach($matches as $match)
                <tr>
                  <td>{{$index++}}</td>
                  <td>{{$match->home_team}}</td>
                  <td>{{$match->away_team}}</td>
                  <td>{{$match->kickoff ? $match->kickoff->toDateString() : 'next year'}}</td>
                  <td><a class="btn btn-success" id="demoNotify" href="{{url('admin/edit-match/' . $match->id)}}">Edit Match</a></td>
                </tr>
                @endforeach
                <!-- <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                  <td><a class="btn btn-success" id="demoNotify" href="{{url('admin/edit-match')}}">Edit Match</a></td>

                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                  <td><a class="btn btn-success" id="demoNotify" href="{{url('admin/edit-match')}}">Edit Match</a></td>

                </tr> -->
              </tbody>
            </table>
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
    <script type="text/javascript" src="js/plugins/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.world.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.vmap.sampledata.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      
      	var map = $('#demo-map');
      	map.vectorMap({
      		map: 'world_en',
      		backgroundColor: '#fff',
      		color: '#333',
      		hoverOpacity: 0.7,
      		selectedColor: '#666666',
      		enableZoom: true,
      		showTooltip: true,
      		scaleColors: ['#C8EEFF', '#006491'],
      		values: sample_data,
      		normalizeFunction: 'polynomial'
      	});
      });
    </script>
    
  </body>
@stop