<nav
  class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
  data-aos="fade-down"
>
  <div class="container">
    <a
      href="{{ route('home') }}"
      class="navbar-brand font-weight-bold"
      style="color: #8185da"
    >
      UMKM UNLA</a
    >
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{ route('home') }}"
             class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">home</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('categories') }}"
             class="nav-link {{ (request()->is('categories*')) ? 'active' : '' }}">products</a>
        </li>
        <li class="nav-item">
          <a href="" 
             class="nav-link {{ (request()->is('#')) ? 'active' : '' }}">search</a>
        </li>
        @guest
          <li class="nav-item active">
            <a href="{{ route('register') }}" class="nav-link">sign up</a>
          </li>
          <li class="nav-item active">
            <a
              href="{{ route('login') }}"
              class="btn nav-link px-4 text-white"
              style="background-color: #8185da"
              >sign in</a
            >
          </li>
        @endguest
      </ul>
        @auth
          <!-- desktop menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="/images/icon-user.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu">
                <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item"
                  >Settings</a
                >
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
            <li class="nav-item">
              <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">
                <img src="/images/icon-cart.svg" alt="" />
              </a>
            </li>
          </ul>

          <ul class="navbar-nav d-block d-lg-none">
            <li class="nav-item">
              <a href="#" class="nav-link">Hi, {{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cart') }}" class="nav-link d-inline-block">Cart</a>
            </li>
          </ul>
        @endauth
    </div>
  </div>
</nav>