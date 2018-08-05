@extends('user.layouts.master')
@section('body')

  <body class="app sidebar-mini rtl">
  <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-user-circle-o"></i> Trade History</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Trade History</a></li>
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
                <a class="nav-link active" data-toggle="tab" href="#History">Trade History</a>
            </li>
              
          </ul>
        </div>
        <div class="card-body">
          <div class="alert alert-light border-secondary shadow" role="alert">
          <h5 class="section-title text-muted mb-2"></h5>
          <div class="row">
        <div class="col-md-4">
          <div class="tile bg-success">
              <h4>Total matches Played</h4>
            <div class="tile-body">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-info">
              <h4 class="title">Vetted Matches</h4>
            <div class="tile-body">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tile bg-warning">
              <h4 class="title">Successful Matches</h4>
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
              <button class="btn btn-success" type="button">Search Record</button>
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
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                  </tr>
                  <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                  </tr>
                  <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                  </tr>
                  <tr>
                    <td>Jena Gaines</td>
                    <td>Office Manager</td>
                    <td>London</td>
                    <td>30</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                  </tr>
                  <tr>
                    <td>Quinn Flynn</td>
                    <td>Support Lead</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                  </tr>
                  <tr>
                    <td>Charde Marshall</td>
                    <td>Regional Director</td>
                    <td>San Francisco</td>
                    <td>36</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                  </tr>
                  <tr>
                    <td>Haley Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>London</td>
                    <td>43</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                  </tr>
                  <tr>
                    <td>Tatyana Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>London</td>
                    <td>19</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                  </tr>
                  <tr>
                    <td>Michael Silva</td>
                    <td>Marketing Designer</td>
                    <td>London</td>
                    <td>66</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                  </tr>
                  <tr>
                    <td>Paul Byrd</td>
                    <td>Chief Financial Officer (CFO)</td>
                    <td>New York</td>
                    <td>64</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                  </tr>
                  <tr>
                    <td>Gloria Little</td>
                    <td>Systems Administrator</td>
                    <td>New York</td>
                    <td>59</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                  </tr>
                  <tr>
                    <td>Bradley Greer</td>
                    <td>Software Engineer</td>
                    <td>London</td>
                    <td>41</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                  </tr>
                  <tr>
                    <td>Shou Itou</td>
                    <td>Regional Marketing</td>
                    <td>Tokyo</td>
                    <td>20</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
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