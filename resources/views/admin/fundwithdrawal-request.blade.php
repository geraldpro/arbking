
@extends('admin.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-money"></i> User Fund Withdrawal Request</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">User Fund Withdrawal Request</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Fund Withdrawal Request</h3>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Request Date</th>
                  <th>Amount Requested</th>
                  <th>User Name</th>
                  <th>Status</th>
                  <th>Activity</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>23/5/18</td>
                  <td>2000</td>
                  <td>Ogonna</td>
                  <td>Active</td>
                  <td><button class="btn btn-success" type="button">Confirm</button>
                    <button class="btn btn-warning" type="button">Decline</button>
                  </td>

                </tr>
                <tr>
                    <td>1</td>
                    <td>23/5/18</td>
                    <td>2000</td>
                    <td>Ogonna</td>
                    <td>Active</td>
                    <td><button class="btn btn-success" type="button">Confirm</button>
                      <button class="btn btn-warning" type="button">Decline</button>
                    </td>
  
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>23/5/18</td>
                    <td>2000</td>
                    <td>Ogonna</td>
                    <td>Active</td>
                    <td><button class="btn btn-success" type="button">Confirm</button>
                      <button class="btn btn-warning" type="button">Decline</button>
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
    
  </body>
  @stop