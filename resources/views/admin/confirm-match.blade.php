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
                <tr>
                  <td>1</td>
                  <td>Manchester United fc</td>
                  <td>Chelsea fc</td>
                  <td>12/7/18</td>
                  <td><button class="btn btn-success" type="button">Won</button>
                    <button class="btn btn-warning" type="button">Lost</button>
                    <button class="btn btn-danger" type="button">Cancelled</button>
                  </td>

                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>12/7/18</td>
                  <td><button class="btn btn-success" type="button">Won</button>
                    <button class="btn btn-warning" type="button">Lost</button>
                    <button class="btn btn-danger" type="button">Cancelled</button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>12/7/18</td>
                  <td><button class="btn btn-success" type="button">Won</button>
                    <button class="btn btn-warning" type="button">Lost</button>
                    <button class="btn btn-danger" type="button">Cancelled</button>
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
    <!-- Google analytics script--> 
  </body>
  
 @stop
