<nav id='navbar' class="navbar navbar-expand-lg navbar-dark" style="background-color: #00bff3;">
  <div class="container">
    <a class="navbar-brand py-0 fs-4 fw-semibold" href="/"><img src="/img/logo.png" alt="" width="30" height="35" class="d-inline-block align-text-top ">Paradise Tour </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNew" aria-controls="navbarNew" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNew" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-semibold {{ Request::is('/*','Paketwisata*') ? 'active' : ''}}" href="/">Paket Wisata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold {{ Request::is('Pariwisata*' ) ? 'active' : ''}}" href="/Pariwisata">Pariwisata</a>
        <li class="nav-item">
          <a class="nav-link fw-semibold {{ Request::is('kontak') ? 'active' : ''}}" href="/kontak">Kontak</a>
        </li>
      </ul>
      <ul class="navbar-nav ">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hello, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark  text-white" style="background-color: #00bff3;" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout <i class="bi bi-box-arrow-right"></i></button>
                </form>

              </li>
            </ul>
          </li>    
        @endauth
      </ul>
    </div>
  </div>
</nav>


