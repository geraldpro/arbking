@extends('admin.layouts.master')
@section('body')

<body class="app sidebar-mini rtl">
  <main class="app-content">
  <div class="app-title">
        <div>
          <h1> Create Match</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item"><a href="#">Create Match</a></li>
        </ul>
      </div>
     
     
  <!-- Navs-->
<div class="row justify-content-justify">
  <div class="col-lg-8">
    <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#singlematches">Single match</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#multiplematches">Multiple matches</a>
              </li>
          </ul>
        </div>
      <div class="card-body">
          <div class="alert alert-light border-secondary shadow" role="alert">
             <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="singlematches">  
                <div class="row">
        <div class="col-md-12">
   
    <!-- <session starts -->
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
   <!-- <session ends -->

<div class="tile-body">
    <form method="POST" action="{{ route('createMatch') }}">
        <div class="form-group {{ ($errors->has('league')) ? 'has-error' : ''}}">
              <label class="control-label">League</label>
                <input class="form-control" name="league" type="text" placeholder="Enter League name">
                  @if ($errors->has('league'))
									<span style="color: palevioletred;">{{ $errors->first('league') }}</span>
								@endif
          </div>
         <div class="form-group {{ ($errors->has('home_team')) ? 'has-error' : ''}}">
            <label class="control-label">Home Team</label>
            <input class="form-control" name="home_team" type="text" placeholder="Enter Home Team">
            @if ($errors->has('home_team'))
            <span style="color: palevioletred;">{{ $errors->first('home_team') }}</span>
          @endif
          </div>
          <div class="form-group {{ ($errors->has('away_team')) ? 'has-error' : ''}}">
              <label class="control-label">Away Team</label>
              <input class="form-control" name="away_team" type="text" placeholder="Enter Away Team">
              @if ($errors->has('away_team'))
              <span style="color: palevioletred;">{{ $errors->first('away_team') }}</span>
								@endif
                </div>
                <div class="form-group  {{ ($errors->has('kickoff')) ? 'has-error' : ''}}">
                <label class="control-label">Kick off date & time</label>
                   <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" name="kickoff" data-target="#datetimepicker1"/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                @if ($errors->has('kickoff'))
									<span style="color: palevioletred;">{{ $errors->first('kickoff') }}</span>
								@endif
            </div>
                <div class="form-group  {{ ($errors->has('selected_market')) ? 'has-error' : ''}}">
                  <label class="control-label">Selected Market</label>
                  <input class="form-control" name="selected_market" type="text" placeholder="Enter Selected Market">
                  @if ($errors->has('selected_market'))
									<span style="color: palevioletred;">{{ $errors->first('selected_market') }}</span>
								@endif
                </div>
                <div class="form-group {{ ($errors->has('selected_odd')) ? 'has-error' : ''}}">
                  <label class="control-label">Selected Odd</label>
                  <input class="form-control" name="selected_odd" type="text" placeholder="Enter Selected Odd">
                  @if ($errors->has('selected_odd'))
									<span style="color: palevioletred;">{{ $errors->first('selected_odd') }}</span>
								@endif
                </div>
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <div class="tile-footer">
              <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
              </form>
            </div>
            </div>  
     </div>
    </div>
    <div class="tab-pane fade" id="multiplematches">
    <div>
      <form method="POST" action="{{ route('createGroupMatch') }}">
    <div class="alert alert-light border" role="alert">
        <div class="form-group">
            <label for="exampleSelect1">Select no of matches</label>
            <select class="form-control" name="selection-number" id="select-number">
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          </div>
          <div class="alert alert-light border" role="alert" id="matchlist">
            <!-- <h5>Selection1</h5>
          <div class="form-group {{ ($errors->has('league')) ? 'has-error' : ''}}">
              <label class="control-label">League</label>
                <input class="form-control" name="league" type="text" placeholder="Enter League name">
          </div>
         <div class="form-group {{ ($errors->has('home_team')) ? 'has-error' : ''}}">
            <label class="control-label">Home Team</label>
            <input class="form-control" name="home_team" type="text" placeholder="Enter Home Team">
          </div>
          <div class="form-group {{ ($errors->has('away_team')) ? 'has-error' : ''}}">
              <label class="control-label">Away Team</label>
                      <input class="form-control" name="away_team" type="text" placeholder="Enter Away Team">
                </div>
                
                <div class="form-group  {{ ($errors->has('selected_market')) ? 'has-error' : ''}}">
                  <label class="control-label">Selected Market</label>
                  <input class="form-control" name="selected_market" type="text" placeholder="Enter Selected Market">
                </div>-->
                </div>

                <div class="form-group  {{ ($errors->has('kickoff')) ? 'has-error' : ''}}">
                <label class="control-label">Kick off date & time</label>
                   <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" name="kickoff" data-target="#datetimepicker2"/>
                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                @if ($errors->has('kickoff'))
									<span style="color: palevioletred;">{{ $errors->first('kickoff') }}</span>
								@endif
            </div>
                <div class="form-group {{ ($errors->has('selected_odd')) ? 'has-error' : ''}}">
                  <label class="control-label">Selected Odd</label>
                  <input class="form-control" name="selected_odd" type="text" placeholder="Enter Selected Odd">
                  @if ($errors->has('selected_odd'))
									<span style="color: palevioletred;">{{ $errors->first('selected_odd') }}</span>
								@endif
                </div>
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <div class="tile-footer">
              <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </form>
          </div>
      </div>
    </div>  
</main>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Date picker-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>

    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
       <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker('mm/dd/yyyy hh-mm');
            });
        </script>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker('mm/dd/yyyy hh-mm');
            });
            window.onload = function() {
              var selectedNumber = document.getElementById('select-number').value;
              var container = document.getElementById('matchlist');
              var index = 0;
                for(var i=0; i<selectedNumber; i++) {
                  index = i + 1;
                  var h1 =  "<h5>Selection" + index + "</h5> ";
                  var league_name = "<div class=\"form-group\"><label class=\"control-label\">League</label><input class=\"form-control\" name=\"league" +  index + "\" type=\"text\" placeholder=\"Enter League name\"></div>";
                  var home_team = "<div class=\"form-group\"><label class=\"control-label\">Home Team</label><input class=\"form-control\" name=\"home_team" +  index + "\"  type=\"text\" placeholder=\"Enter Home Team\"></div>";
                  var away_team =  "<div class=\"form-group\"><label class=\"control-label\">Away Team</label><input class=\"form-control\" name=\"away_team" +  index + "\"  type=\"text\" placeholder=\"Enter  Away Team\"></div>";
                  var selected_market =  "<div class=\"form-group\"><label class=\"control-label\">Selected Market</label><input class=\"form-control\" name=\"selected_market" +  index + "\"  type=\"text\" placeholder=\"Enter  Selected Market\"></div>";
                  container.innerHTML +=  h1 + league_name + home_team + away_team +  selected_market;
                }
              document.getElementById('select-number').addEventListener('change', fillMatch);
              };
            function fillMatch(e) {
                var val = e.target.value;
                var container = document.getElementById('matchlist');
                container.innerHTML = '';
                var index = 0;
                for(var i=0; i<val; i++) {
                  index = i + 1;
                  var h1 =  "<h5>Selection" + index + "</h5> ";
                  var league_name = "<div class=\"form-group\"><label class=\"control-label\">League</label><input class=\"form-control\" name=\"league" +  index + "\" type=\"text\" placeholder=\"Enter League name\"></div>";
                  var home_team = "<div class=\"form-group\"><label class=\"control-label\">Home Team</label><input class=\"form-control\" name=\"home_team" +  index + "\"  type=\"text\" placeholder=\"Enter Home Team\"></div>";
                  var away_team =  "<div class=\"form-group\"><label class=\"control-label\">Away Team</label><input class=\"form-control\" name=\"away_team" +  index + "\"  type=\"text\" placeholder=\"Enter  Away Team\"></div>";
                  var selected_market =  "<div class=\"form-group\"><label class=\"control-label\">Selected Market</label><input class=\"form-control\" name=\"selected_market" +  index + "\"  type=\"text\" placeholder=\"Enter  Selected Market\"></div>";
                  container.innerHTML +=  h1 + league_name + home_team + away_team +  selected_market;
                }
            }

            // var container = document.getElementById('matchlist');
            // container.innerHtml += 
        </script>
  </body>
</html>

  @stop