
<header class="navbar navbar-dark sticky-top  flex-md-nowrap p-0 shadow "style="background-color: #00bff3;">

  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4 py-2 fs-5 fw-semibold" href="/"><img src="/img/logo.png" alt="" width="25" height="30" class="d-inline-block align-text-top ">Paradise Tour</a>
    <div class="nav d-flex justify-content-end ">
      <button class="navbar-toggler  d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
    

        <div class="navbar-nav ">
          <div class="nav-item text-nowrap " >
            <form action="/logout" method="post" class="px-2">
                @csrf
                <button type="submit" class="nav-link px-3  border-0 text-white fs-6 fw-semibold" style="background-color: #00bff3;">Logout <span data-feather="log-out"></span></button>
            </form>
          </div>
        </div>
    </div>
</header>