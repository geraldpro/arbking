@extends('admin.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1> Livepool update</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>          
        <li class="breadcrumb-item">Livepool update</li>
        </ul>
      </div>
     
     
  <!-- Navs-->
    
    <div class="row justify">
      <div class="col-lg-8 mb-3">
               <div class="card">
                   <div class="card-header">
                      <ul class="nav nav-tabs card-header-tabs">
                         <li class="nav-item"><a class="nav-link active" href="#">Livepool update</a></li>
                      </ul>
                    </div>
                  <div class="card-body">
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
         <div class="alert alert-light border-secondary shadow" role="alert">
         <form class="row" style="margin-top: 10px;" method="POST" action="{{ route('closeTrade') }}">
            <div class="col-md-12">
                  <div class="form-group {{ ($errors->has('margin')) ? 'has-error' : ''}}">
                           <input type="text" name="margin" class="form-control" aria-describedby="emailHelp" placeholder="Enter percentage">       
                  </div>
                  @if ($errors->has('margin'))
									<span style="color: palevioletred;">{{ $errors->first('margin') }}</span>
								@endif
            </div> 
        <div class="form-group col-md-12 {{ ($errors->has('closure')) ? 'has-error' : ''}}">
            <label for="gender">Next pool starts(hrs)</label>
               <select class="form-control" name="closure" id="exampleSelect1">
                  <option value="none">Select next pool</option>
                  <option value="24">24</option>
                  <option value="30">30</option>
                  <option value="36">36</option>     
                  <option value="40">40</option>     
                  <option value="46">46</option>
                  <option value="52">52</option>
                  <option value="58">58</option>         
                  <option value="64">64</option> 
                  <option value="72">72</option>         
               </select>
               @if ($errors->has('closure'))
               <span style="color: palevioletred;">{{ $errors->first('closure') }}</span>
             @endif
      </div>
      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
         <div class="col-md-3"> <button class="btn btn-success" type="submit">Submit</button></div>
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
   
    
  </body>
  @stop