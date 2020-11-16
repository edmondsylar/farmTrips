@php
    use App\driverReequests;
    $newdriver = driverReequests::where([
        'driver'=>Auth::user()->email,
        'status'=> 'requested'
    ])->count();


    $newfarmer = driverReequests::where([
        'farmer'=>Auth::user()->email,
        'status'=> 'ended'
    ])->count();
// return print_r($newdriver);
@endphp

<nav class="t-header">
  <div class="t-header-brand-wrapper">
    <a href="index.html">
      <img class="logo" src="assets/images/logo.svg" alt="">
      <img class="logo-mini" src="assets/images/logo_mini.svg" alt="">
    </a>
  </div>
  <div class="t-header-content-wrapper">
    <div class="t-header-content">
      <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
        <i class="mdi mdi-menu"></i>
      </button>
      <form action="#" class="t-header-search-box">
        <div class="input-group">
          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
          <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
        </div>
      </form>
      <ul class="nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-bell-outline mdi-1x"></i>
            @if ($newdriver > 0)
                <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                @else
                    @if ($newfarmer > 0)
                        <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                    @endif
            @endif
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
            <div class="dropdown-header">
              <h6 class="dropdown-title">Notifications</h6>
              <p class="dropdown-title-text">You have {{ $newdriver }} unread notification</p>
            </div>
            <div class="dropdown-body">
                @if ($newdriver > 0)
                    <a href="{{ url('/divers_request') }}">
                        <div class="dropdown-list">
                            <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                            <i class="mdi mdi-security"></i>
                            </div>
                            <div class="content-wrapper">
                            <small class="name">New Request Alert</small>
                            <small class="content-text">You have a new Request to attend to</small>
                            </div>
                        </div>
                    </a>
                    @else
                        @if ($newfarmer > 0)
                        <a href="{{ url('#') }}">
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                <i class="mdi mdi-security"></i>
                                </div>
                                <div class="content-wrapper">
                                <small class="name">Request Status Update</small>
                                <small class="content-text">A Trip has been completed</small>
                                </div>
                            </div>
                        </a>
                        @endif
                @endif
            </div>
            <div class="dropdown-footer">
              <a href="{{ url('/divers_request') }}">View All</a>
            </div>
          </div>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-apps mdi-1x"></i>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
            <div class="dropdown-header">
              <h6 class="dropdown-title">Settings</h6>
              <p class="dropdown-title-text mt-2">System Actions</p>
            </div>
            <div class="dropdown-body border-top pt-0">

            </div>
            <div class="dropdown-footer">
              <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
