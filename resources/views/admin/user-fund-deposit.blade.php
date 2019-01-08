@extends('admin.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
    
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-credit-card"></i> User Fund Deposit</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">User Fund Deposit</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">User Fund Deposit</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Date</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Amount Deposited</th>
                  <th>Activity</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>12/5/18</td>
                  <td>Rio</td>
                  <td>Ferdinand</td>
                  <td>rio@gmail.com</td>
                  <td>40000</td>
                  <td><button class="btn btn-success" type="button">Approve Fund</button>
                    <button class="btn btn-primary" type="button">Decline Fund</button>
                  </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12/5/18</td>
                    <td>Rio</td>
                    <td>Ferdinand</td>
                    <td>rio@gmail.com</td>
                    <td>40000</td>
                    <td><button class="btn btn-success" type="button">Approve Fund</button>
                      <button class="btn btn-primary" type="button">Decline Fund</button>
                    </td>
                  </tr>
                  <tr>
                      <td>1</td>
                      <td>12/5/18</td>
                      <td>Rio</td>
                      <td>Ferdinand</td>
                      <td>rio@gmail.com</td>
                      <td>40000</td>
                      <td><button class="btn btn-success" type="button">Approve Fund</button>
                        <button class="btn btn-primary" type="button">Decline Fund</button>
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