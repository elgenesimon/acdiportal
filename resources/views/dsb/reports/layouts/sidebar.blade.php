<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material/img/sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
<div class="logo"><a href="{{route('dashboard')}}" class="simple-text logo-mini">
EP
</a>
<a href="{{route('dashboard')}}" class="simple-text logo-normal">
ACDIMPC DSB
</a></div>
<div class="sidebar-wrapper">
<div class="user">
<div class="photo">
  <img src="{{ asset('material/img/faces/marc.jpg')}}" />
</div>
<div class="user-info">
  <a data-toggle="collapse" href="#collapseExample" class="username">
    <span>
        {{Auth::user()->name}}  {{Auth::user()->lname}} 
      <b class="caret"></b>
    </span>
  </a>
  <div class="collapse {{ $activeparents == 'Profile' ? ' show' : '' }}" id="collapseExample">
    <ul class="nav">
      <li class="nav-item {{ $title == 'Admin Profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('dsb/reports/profile')}}">
          <span class="sidebar-mini"> MP </span>
          <span class="sidebar-normal"> My Profile </span>
        </a>
      </li>
      <li class="nav-item {{ $title == 'Admin Settings' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('dsb/reports/settings')}}">
          <span class="sidebar-mini"> S </span>
          <span class="sidebar-normal"> Settings </span>
        </a>
      </li>
    </ul>
  </div>
</div>
</div>
<ul class="nav">
  <li class="nav-item {{ $activeparents == 'Dashboard' ? ' active' : '' }}">
    <a class="nav-link" data-toggle="collapse" href="#dashboardMenu">
      <i class="material-icons">dashboard</i>
      <p> Dashboard
        <b class="caret"></b>
      </p>
    </a>
    <div class="collapse {{ $activeparents == 'Dashboard' ? ' show' : '' }}" id="dashboardMenu">
      <ul class="nav">
        <li class="nav-item {{ $title == 'Monitoring' ? ' active' : '' }}">
          <a class="nav-link" href="{{route('dashboard')}}">
            <span class="sidebar-mini"><i class="material-icons">
                analytics
            </i></span>
            <span class="sidebar-normal"> Monitoring </span>
          </a>
        </li>
        <li class="nav-item {{ $title == 'Request' ? ' active' : '' }}">
          <a class="nav-link" href="{{route('dsb/reports/request')}}">
            <span class="sidebar-mini"><i class="material-icons">
              approval
            </i></span>
            <span class="sidebar-normal"> Request </span>
          </a>
        </li>
      </ul>
    </div>
  </li>

  <li class="nav-item {{ $activeparents == 'User' ? ' active' : '' }} user">
  <a class="nav-link" data-toggle="collapse" href="#formsExamples">
    <i class="material-icons">poll</i>
    <p> Survey
      <b class="caret"></b>
    </p>
  </a>
  <div class="collapse {{ $activeparents == 'User' ? ' show' : '' }}" id="formsExamples">
    <ul class="nav">
        <li class="nav-item {{ $title == 'Survey Builder' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('dsb/reports/builder')}}">
            <span class="sidebar-mini"><i class="material-icons">
              post_add
            </i></span>
          <span class="sidebar-normal"> Creator/Builder </span>
        </a>
      </li>
      <li class="nav-item {{ $title == 'Survey List' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('dsb/reports/surveylist')}}">
            <span class="sidebar-mini"><i class="material-icons">
              checklist
             </i></span>
          <span class="sidebar-normal"> Survey List </span>
        </a>
      </li>  
    </ul>
  </div>
  </li>

</ul>
</div>

<div class="sidebar-background"></div>
</div>