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
         <div class="alert alert-light border-secondary shadow" role="alert">
         <form class="row" style="margin-top: 10px;">
            <div class="col-md-12">
                  <div class="form-group">
                           <input type="text" name="amount" class="form-control" aria-describedby="emailHelp" placeholder="Enter percentage">       
                  </div>
            </div> 
        <div class="form-group col-md-12">
            <label for="gender">Next pool starts(hrs)</label>
               <select class="form-control" name="gender" id="exampleSelect1">
                  <option value="none">Select next pool</option>
                  <option>30</option>
                  <option>36</option>     
                  <option>40</option>     
                  <option>46</option>
                  <option>52</option>
                  <option>58</option>         
                  <option>64</option> 
                  <option>72</option>         
               </select>
      </div>
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