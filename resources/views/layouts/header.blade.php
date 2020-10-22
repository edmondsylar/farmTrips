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
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
            <div class="dropdown-header">
              <h6 class="dropdown-title">Notifications</h6>
              <p class="dropdown-title-text">You have 4 unread notification</p>
            </div>
            <div class="dropdown-body">
              <div class="dropdown-list">
                <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                  <i class="mdi mdi-alert"></i>
                </div>
                <div class="content-wrapper">
                  <small class="name">Storage Full</small>
                  <small class="content-text">Server storage almost full</small>
                </div>
              </div>
              <div class="dropdown-list">
                <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                  <i class="mdi mdi-cloud-upload"></i>
                </div>
                <div class="content-wrapper">
                  <small class="name">Upload Completed</small>
                  <small class="content-text">3 Files uploded successfully</small>
                </div>
              </div>
              <div class="dropdown-list">
                <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                  <i class="mdi mdi-security"></i>
                </div>
                <div class="content-wrapper">
                  <small class="name">Authentication Required</small>
                  <small class="content-text">Please verify your password to continue using cloud services</small>
                </div>
              </div>
            </div>
            <div class="dropdown-footer">
              <a href="#">View All</a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-message-outline mdi-1x"></i>
            <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
            <div class="dropdown-header">
              <h6 class="dropdown-title">Messages</h6>
              <p class="dropdown-title-text">You have 0 unread messages</p>
            </div>
            <div class="dropdown-body">
              {{-- message and notifications can come here. --}}
            </div>
            <div class="dropdown-footer">
              <a href="#">View All</a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-apps mdi-1x"></i>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
            <div class="dropdown-header">
              <h6 class="dropdown-title">Apps</h6>
              <p class="dropdown-title-text mt-2">Authenticate with other Apps</p>
            </div>
            <div class="dropdown-body border-top pt-0">
              <a class="dropdown-grid">
                <i class="grid-icon mdi mdi-gmail mdi-2x"></i>
                <span class="grid-tittle">Google</span>
              </a>
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