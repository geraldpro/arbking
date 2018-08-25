@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
            <h1><i class="fa fa-user-circle-o"></i>Fund My Account</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
        </ul>
      </div>
     
     
  <!-- Navs-->
  <div class="tile mb-4">
    
    <div class="row">
  <div class="col-lg-8">
    <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile">Basic</a>
            </li>
          </ul>
        </div>
       
     <div class="card-body">
       <div class="col-lg-12" style="padding: 0px;">
          <div class="bs-component">
            <div class="alert alert-dismissible alert-success">
              <button class="close" type="button" data-dismiss="alert">×</button>
              <strong>Well done!</strong> You successfully read
              <a class="alert-link" href="#">this important alert message</a>.
            </div>
          </div>
        </div>
        <div class="col-lg-12" style="padding: 0px;">
               <div class="bs-component">
                    <div class="alert alert-dismissible alert-danger">
                         <button class="close" type="button" data-dismiss="alert">×</button>
                           <strong>Oh snap!</strong>
                                 <a class="alert-link" href="#">Change a few things up</a> and try submitting again.
                    </div>
            </div>
        </div>
          <div class="alert alert-light border-secondary shadow" role="alert">
                <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade active show" id="profile">
                            <form class="row" method="post" action="{{ route('initiatePayment') }}">
                                 {{ csrf_field() }}
                                         <div class="form-group col-md-6">
                                                <label for="firstname">Amount (usd)</label>
                                                       <input type="text" name="amount" class="form-control" aria-describedby="emailHelp">
                                                                <br>
                                                                      <button class="btn btn-success" type="submit">Submit</button>
                                          </div>
                                  </form>
                              </div> 
          <div class="tab-pane fade" id="uploadphoto">
            <!-- <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Choose a picture to Upload</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div>
              <button class="btn btn-success" type="button">Submit</button>

            </form>
        </div> -->
    </div>
    </div>
  </div>
</div>  
</div>
<!-- <div class="col-lg-4">
            <div class="list-group">
              <div class="list-group-item list-group-item-action active">Manage Account</div>
              <a href="#" class="list-group-item list-group-item-action">Change Password</a>
              <a href="#" class="list-group-item list-group-item-action">Settings</a>
            </div>
          </div>
  </div> -->
  
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
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    
  </body>

  @stop