@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
       <main class="app-content">
            <div class="app-title">
                <div class="div">
                       <h1> Trade History</h1>
                </div>
                  <ul class="app-breadcrumb breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                   <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Trade History</a></li>
                  </u>
           </div>
    
  <!-- Navs-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#History">Trade History</a>
                    </li>
              </ul>
        </div>
        <div class="card-body">
            <div class="alert alert-light border-secondary shadow" role="alert">
                <h5 class="section-title text-muted mb-2"></h5>
                   <div class="row">
                     <div class="col-md-4">
                         <div class="tile bg-info">
                             <h4>Total matches Played:</h4>
                                  <div class="tile-body">
                               </div>
                         </div>
                      </div>
                    <div class="col-md-4">
                      <div class="tile bg-info">
                          <h4 class="title">Matches Played:</h4>
                             <div class="tile-body">
                             </div>
                        </div>
                      </div>
                    <div class="col-md-4">
                      <div class="tile bg-info">
                          <h4 class="title">Matches Won:</h4>
                             <div class="tile-body">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="alert alert-light border-secondary shadow">
                   <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade active show" id="History">
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
                                                          <button class="btn btn-info" type="button">Search Record</button>
                                               </div>
                                        </div>
                                 </form>
                                  <div class="row">
                                      <div class="col-md-12">
                                        <div class="alert alert-light border-secondary shadow">
                                          <div class="tile-body">
                                            <table class="table table-hover table-bordered" id="sampleTable">
                                              <thead>
                                                <tr>
                                                  <th>#</th>
                                                  <th>Match Title</th>
                                                  <th>Match Date</th>
                                                  <th>Match Status</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>1</td>
                                                  <td>Manchester United vs Arsenal</td>
                                                  <td>22/10/18</td>
                                                  <td>Pending</td>
                                                </tr>
                                                <tr>
                                                  <td>2</td>
                                                  <td>Chelsea vs Arsenal</td>
                                                  <td>22/10/18</td>
                                                  <td>Won</td>
                                                </tr>
                                                <tr>
                                                  <td>3</td>
                                                  <td>Manchester United vs Arsenal</td>
                                                  <td>22/10/18</td>
                                                  <td>Lost</td>
                                                </tr>
                                                <tr>
                                                  <td>4</td>
                                                  <td>Manchester United vs Arsenal</td>
                                                  <td>22/10/18</td>
                                                  <td>Won</td>
                                                </tr>
                                                <tr>
                                                  <td>5</td>
                                                  <td>Manchester United vs Arsenal</td>
                                                  <td>22/10/18</td>
                                                  <td>Void</td>
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
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
     <!-- Date picker-->
     <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('.input-daterange input').each(function() {
         $(this).datepicker('clearDates');
      });
    </script>
    
  </body>

  @stop