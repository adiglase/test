<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse top-0">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/orders*') ? 'active' : ''}}" href="/dashboard/orders">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Booking Data
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Pariwisata
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/trips*') ? 'active' : ''}}" href="/dashboard/trips">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Trip Package
          </a>
        </li>
      </ul>
    </div>
  </nav>