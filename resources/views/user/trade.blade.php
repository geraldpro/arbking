@extends('user.layouts.master')
@section('body')

<body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
         <div class="div">
              <h1><i class=""></i> Trade</h1>
         </div>
          <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
              <li class="breadcrumb-item"><a href="#">Trade</a></li>
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
                <a class="nav-link active" data-toggle="tab" href="#trade">Trade</a>
            </li>
          </ul>
        </div>
      <div class="card-body">
          <div class="alert alert-light border-secondary shadow" role="alert">
             <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="trade">
                     <form class="row" method="post" action="#">
                         <div class="form-group col-md-12">
                             <label for="lay odd">Our Lay Odd</label>
                                 <input type="text" name='lay_odd' class="form-control" aria-describedby="emailHelp">
                         </div>
                   <div class="form-group col-md-12">
                       <label for="lastname">Back Odd</label>
                          <input type="text" name="back_odd" class="form-control" >
                        </div>
                        <div class="form-group col-md-12">
                        <label class="control-label">Lay Stake</label>
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input class="form-control" id="exampleInputAmount" type="text" placeholder="Amount">
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                           </div>
                        </div>
                        </div>
                        <div class="form-group col-md-12">
                        <label class="control-label">Lay Liability</label>
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                           <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                              <input class="form-control" id="exampleInputAmount" type="text">
                              <div class="input-group-append"><span class="input-group-text">.00</span></div>
                           </div>
                        </div>
                        </div>
                        <div class="form-group col-md-12">
                                {{ csrf_field() }}
                           <button class="btn btn-success" type="submit">Resolve Stake</button>
                        </div>
                     </form>
                     </form>
               
          </form>
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
    
   
    
  </body>

  @stop