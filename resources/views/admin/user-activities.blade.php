@extends('admin.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-hourglass-half"></i> User Activities</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">User Activities</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">User Activity</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Trade Volume</th>
                  <th>Account Balance</th>
                  <th>Activity</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Rio</td>
                  <td>Ferdinand</td>
                  <td>4</td>
                  <td>40000</td>
                  <td><button class="btn btn-success" type="button">Add Fund</button>
                    <button class="btn btn-primary" type="button">Deduct Fund</button>
                    <button class="btn btn-warning" type="button">Reset Account</button>
                  </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Rio</td>
                    <td>Ferdinand</td>
                    <td>4</td>
                    <td>40000</td>
                    <td><button class="btn btn-success" type="button">Add Fund</button>
                      <button class="btn btn-primary" type="button">Deduct Fund</button>
                      <button class="btn btn-warning" type="button">Reset Account</button>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Rio</td>
                    <td>Ferdinand</td>
                    <td>4</td>
                    <td>40000</td>
                    <td><button class="btn btn-success" type="button">Add Fund</button>
                      <button class="btn btn-primary" type="button">Deduct Fund</button>
                      <button class="btn btn-warning" type="button">Reset Account</button>
                    </td>
                  </tr>
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
    
  </body>
@stop