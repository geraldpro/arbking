@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
            <h1><i class="fa fa-fund-circle-o"></i> Request Fund Withdrawal</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
        </ul>
      </div>
     
     
  <!-- Navs-->

<div class="tile mb-4">
<div class="row">
  <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile">Fund my account</a>
               </li>
            <li  class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#pending_payment">Pending Payment</a>
            </li>
          </ul>
        </div>
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
          <div class="alert alert-light border-secondary shadow" role="alert">
                <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade active show" id="profile">
                            <form class="row" method="post" action="{{ route('initiatePayment') }}">
                                 {{ csrf_field() }}
                                         <div class="form-group col-md-6">
                                                <label for="amount">Amount (usd)</label>
                                                       <input type="text" name="amount" class="form-control" aria-describedby="emailHelp" value="{{ old('amount') }}">
                                                       @if ($errors->has('amount'))
									                                          <span style="color: palevioletred;">{{ $errors->first('amount') }}</span>
                                                        @endif
                                              <label for="amount">Wallet  Address to withdraw into</label>
                                                  <input type="text" name="address" class="form-control" aria-describedby="emailHelp" value="{{ old('address') }}">
                                              @if ($errors->has('address'))
                                                    <span style="color: palevioletred;">{{ $errors->first('address') }}</span>
                                                @endif
                                                                <br>
                                         <input type="hidden" value="{{Auth::user()->accountType->short_name}}" name="payment_method">
                                                                      <button class="btn btn-success" type="submit">Submit</button>
                                          </div>
                                  </form>
                              </div> 
                            <div class="tab-pane fade" id="pending_payment">
                            <div class="card-body">
                              <div class="col-lg-12" style="padding: 0px;">
                                <div class="bs-component">
                                   <div class="alert alert-dismissible alert-success" id="suc-div" style="display: none">
                                      <button class="close" type="button" data-dismiss="alert">×</button>
                                         <strong>Congratulations!! payment confirmed successfully</strong>
                                          <!-- <a class="alert-link" href="#">this important alert message</a>. -->
                                    </div>
                                 </div>
                             </div>
                            <div class="row">
          <div class="col-md-12">
          <div class="alert alert-light">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Withdrawal ID</th>
                  <th>Wallet Address</th>
                  <th>Amount</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
              @if(isset($transactions))
              @foreach($transactions as $transaction)
                <tr>
                  <td>{{$transaction->withdrawal_id}}</td>
                  <td>{{$transaction->wallet_address}}</td>
                  <td>{{$transaction->amount . ' ' . $transaction->coin}}</td>
                  <td>{{$transaction->payment_created_at ? $transaction->payment_created_at->toDateString() : 'not available'}}</td>
                </tr>
              @endforeach
              @endif
                <!-- <tr>
                  <td>23445267dgh</td>
                  <td>$3,600.00</td>
                  <th>May 1st, 2018</th>
                  <th> <button class="btn btn-success" type="button">Confirm Payment</button></th>

                </tr>
                <tr>
                  <td>23445267dgh</td>
                  <td>$3,600.00</td>
                  <th>May 1st, 2018</th>
                  <th> <button class="btn btn-success" type="button">Confirm Payment</button></th>
                </tr> -->
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
      // var data = {
      // 	labels: ["January", "February", "March", "April", "May"],
      // 	datasets: [
      // 		{
      // 			label: "My First dataset",
      // 			fillColor: "rgba(220,220,220,0.2)",
      // 			strokeColor: "rgba(220,220,220,1)",
      // 			pointColor: "rgba(220,220,220,1)",
      // 			pointStrokeColor: "#fff",
      // 			pointHighlightFill: "#fff",
      // 			pointHighlightStroke: "rgba(220,220,220,1)",
      // 			data: [65, 59, 80, 81, 56]
      // 		},
      // 		{
      // 			label: "My Second dataset",
      // 			fillColor: "rgba(151,187,205,0.2)",
      // 			strokeColor: "rgba(151,187,205,1)",
      // 			pointColor: "rgba(151,187,205,1)",
      // 			pointStrokeColor: "#fff",
      // 			pointHighlightFill: "#fff",
      // 			pointHighlightStroke: "rgba(151,187,205,1)",
      // 			data: [28, 48, 40, 19, 86]
      // 		}
      // 	]
      // };
      // var pdata = [
      // 	{
      // 		value: 300,
      // 		color: "#46BFBD",
      // 		highlight: "#5AD3D1",
      // 		label: "Complete"
      // 	},
      // 	{
      // 		value: 50,
      // 		color:"#F7464A",
      // 		highlight: "#FF5A5E",
      // 		label: "In-Progress"
      // 	}
      // ]
      
      // var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      // var lineChart = new Chart(ctxl).Line(data);
      
      // var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      // var pieChart = new Chart(ctxp).Pie(pdata);
      $( document ).ready(function() {
        console.log('cool');
        $('.confirm-btn').click(function(e){
        var target = $(e.target);
        console.log(target)
        var parent = target.parent().parent();
        console.log(parent);
        var id = parent.find('#transaction-id');
        console.log(id);
        var payment_id = parent.find('#payment-id');
        console.log(payment_id);
        var baseUrl = "{{ route('coinpayment.ajax.transaction.manual.check') }}";
        var payment_id = payment_id.val();
        var id = id.val();
        var csrf_token = "{{csrf_token()}}";
        data = {
          _token : csrf_token,
          id : id,
          payment_id : payment_id
        };
       jQuery.post( baseUrl ,  
       data,
       function(data, status){
          console.log(data, status);
          if(status == 'success') {
            if(data.status_text == 'Complete' || data.status == 100) {
                parent.hide();
                $('#suc-div').show();
            }
          }
      });
      });
});
      function getStatus() {
        console.log(cool);
        var baseUrl = "{{ url('/') }}";
        var payment_id = $('#payment-id').val();
        var id = $('#transaction-id').val();
        data = {
          _token : csrf_token,
          id : id,
          payment_id : payment_id
        };
       jQuery.post( baseUrl + "/ajax/transaction/manual/check",  
       data,
       function(data, status){
          console.log(data, status);
      });
    };
    </script>
    
  </body>

  @stop