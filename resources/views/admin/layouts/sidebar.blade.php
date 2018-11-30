 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Trade Ninja</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('admin/dashboard')}}"><i class="app-menu__icon fa fa-dashboard" aria-hidden="true"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin/create-match')}}"><i class="app-menu__icon fa fa-pencil-square-o" aria-hidden="true"></i><span class="app-menu__label">Create Match</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin/view-matches')}}"><i class="app-menu__icon fa fa-eye" aria-hidden="true"></i><span class="app-menu__label">View Matches</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin/confirm-match')}}"><i class="app-menu__icon fa fa-check-circle-o" aria-hidden="true"></i><span class="app-menu__label">Confirm Match</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin/fundwithdrawal-request')}}"><i class="app-menu__icon fa fa-money" aria-hidden="true"></i><span class="app-menu__label">Fund Withdrawal Request</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin/pending-user-request')}}"><i class="app-menu__icon fa fa-user-plus" aria-hidden="true"></i><span class="app-menu__label">Pending User Request</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin/user-activities')}}"><i class="app-menu__icon fa fa-hourglass-half" aria-hidden="true"></i><span class="app-menu__label">User Activities</span></a></li>
        <li><a class="app-menu__item" href="{{url('admin/user-fund-deposit')}}"><i class="app-menu__icon fa fa-credit-card" aria-hidden="true"></i><span class="app-menu__label">User Fund Deposit</span></a></li>  
        <li><a class="app-menu__item" href="{{url('admin/user-profits')}}"><i class="app-menu__icon fa fa-money" aria-hidden="true"></i><span class="app-menu__label">User Profits</span></a></li>  

      </ul>
    </aside>