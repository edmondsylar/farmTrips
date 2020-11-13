<div class="sidebar">
  <div class="user-profile">
    <div class="display-avatar animated-avatar">
      <img class="profile-img img-lg rounded-circle" src="{{ asset('images/profile/male/image_1.png')}}" alt="profile image">
    </div>
    <div class="info-wrapper">
      <p class="user-name">{{ Auth::user()->name }}</p>
      <h6 class="display-income"> <span style="text-transform: capitalize">{{ Auth::user()->role }}</span></h6>
    </div>
  </div>
  <ul class="navigation-menu">
    <li class="nav-category-divider">MAIN</li>

    @if (!Auth::user()->role)
        <li>
            <a href="{{ url('/roles') }}">
                <span class="link-title">Complete Registration</span>
                <i class="mdi mdi-gauge link-icon"></i>
            </a>
        </li>
    @else

    @php
        $role = Auth::user()->role;
    @endphp

    <li>
      <a href="{{ url('/') }}">
        <span class="link-title">Dashboard</span>
        <i class="mdi mdi-gauge link-icon"></i>
      </a>
    </li>

    @switch($role)
        @case('driver')
            <li>
              <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">Trips</span>
                <i class="mdi mdi-flask link-icon"></i>
              </a>
                <ul class="collapse navigation-submenu" id="sample-pages">
                  <li>
                    <a href="{{ url('/trip/progress') }}">In Progress</a>
                  </li>
                  <li>
                    <a href="{{ url('/divers_request') }}">Requests</a>
                  </li>
                  <li>
                    <a href="{{ url('/trip/history') }}">History</a>
                  </li>

              </ul>
            </li>

            <li>
              <a href="#sample-cars" data-toggle="collapse" aria-expanded="false">
                <span class="link-title">Cars</span>
                <i class="mdi mdi-car link-icon"></i>
              </a>
              <ul class="collapse navigation-submenu" id="sample-cars">
                <li>
                <a href="{{ url('/cars') }}">My Cars</a>
                </li>
                <li>
                <a href="{{ url('/trips') }}">Trips</a>
                </li>

              </ul>
            </li>

            @break
        @case('farmer')

        <li>
          <a href="{{ url('/divers/available') }}">
            <span class="link-title">Drivers</span>
            <i class="mdi mdi-gauge link-icon"></i>
          </a>
        </li>

        <li>
          <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
            <span class="link-title">Groups</span>
            <i class="mdi mdi-flask link-icon"></i>
          </a>
          <ul class="collapse navigation-submenu" id="sample-pages">
            <li>
            <a href="{{ url('/m_groups') }}">My groups</a>
            </li>
            <li>
            <a href="{{ url('/groups') }}">All Groups</a>
            </li>

          </ul>
        </li>

        <li>
          <a href="#sample-cars" data-toggle="collapse" aria-expanded="false">
            <span class="link-title">Cars</span>
            <i class="mdi mdi-car link-icon"></i>
          </a>
          <ul class="collapse navigation-submenu" id="sample-cars">
            <li>
            <a href="{{ url('/cars') }}">My Cars</a>
            </li>
            <li>
            <a href="{{ url('/trips') }}">Trips</a>
            </li>

          </ul>
        </li>
            @break
        @default

    @endswitch

    {{-- <li>
      <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
        <span class="link-title">UI Elements</span>
        <i class="mdi mdi-bullseye link-icon"></i>
      </a>
      <ul class="collapse navigation-submenu" id="ui-elements">
        <li>
          <a href="pages/ui-components/buttons.html">Buttons</a>
        </li>
        <li>
          <a href="pages/ui-components/tables.html">Tables</a>
        </li>
        <li>
          <a href="pages/ui-components/typography.html">Typography</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="{{ url('#') }}">
        <span class="link-title">My Account</span>
        <i class="mdi mdi-clipboard-outline link-icon"></i>
      </a>
    </li>

    </li>
    <li class="nav-category-divider">SYSTEM</li>
    <li>
      <a href="{{ url('/') }}">
        <span class="link-title">System FAQs</span>
        <i class="mdi mdi-asterisk link-icon"></i>
      </a>
    </li>
  </ul>--}}
  @endif
</div>
