@extends('admin.layouts.master')
@section('body')
  
  <body class="app sidebar-mini rtl">

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-check-circle-o"></i> Match Confirmation </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Match Confirmation</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
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
            <h3 class="tile-title">Match Confirmation</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Home Team</th>
                  <th>Away Team</th>
                  <th>Match Date</th>
                  <th>Match Verdict</th>

                </tr>
              </thead>
              <tbody>
              <?php $index = 1 ?>
                                  @foreach($matches as $match)
                                      <tr>
                                          <td>{{$index}}</td>
                                          <td>{{$match->home_team}}</td>
                                          <td>{{$match->away_team}}</td>
                                          <td>{{$match->kickoff ? $match->kickoff->toDateString() : 'next year'}}</td>
                                          <td><a href="{{url('admin/resolve/won/' .$match->id)}}"><button type="button" class="btn btn-success ">Won</button></a>
                                              <a href="{{url('admin/resolve/lost/' .$match->id)}}"><button type="button" class="btn btn-warning">Lost</button></a>
                                              <a href="{{url('admin/resolve/cancelled/' .$match->id)}}"><button type="button" class="btn btn-danger">Cancelled</button></a>
                                          </td>
                                      </tr>
                                      <?php $index++ ?>
                                  @endforeach
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
    <!-- Google analytics script--> 
  </body>
  
 @stop
