 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src=" {{Auth::user() && Auth::user()->profile_pic ? Auth::user()->profile_pic : 'https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg'}}" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{Auth::user() ? Auth::user()->first_name  .  ' ' .  Auth::user()->last_name :  'John Doe'}}</p>
          <!-- <p class="app-sidebar__user-designation">Trade Hector</p> -->
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{url('user/dashboard')}}"><i class="app-menu__icon fa fa-dashboard" aria-hidden="true"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/profile')}}"><i class="app-menu__icon fa fa-user-circle-o" aria-hidden="true"></i><span class="app-menu__label">My Profile</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/trade')}}"><i class="app-menu__icon fa fa-check-square" aria-hidden="true"></i><span class="app-menu__label">Trade Now</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/bonus-calculator')}}"><i class="app-menu__icon fa fa-shield" aria-hidden="true"></i><span class="app-menu__label">Bonus Calculator</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/fund-my-account')}}"><i class="app-menu__icon fa fa-plus-square" aria-hidden="true"></i><span class="app-menu__label">Fund my Account</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/livepool-status')}}"><i class="app-menu__icon fa fa-history" aria-hidden="true"></i><span class="app-menu__label">Live Pool Status</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/auto-arbitrage')}}"><i class="app-menu__icon fa fa-history" aria-hidden="true"></i><span class="app-menu__label">Auto Arbitrage</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/my-verified-earning')}}"><i class="app-menu__icon fa fa-bank" aria-hidden="true"></i><span class="app-menu__label">Payouts</span></a></li>
        <li><a class="app-menu__item" href="{{url('user/trade-history')}}"><i class="app-menu__icon fa fa-history" aria-hidden="true"></i><span class="app-menu__label">Trade History</span></a></li>
 
        


      </ul>
    </aside>