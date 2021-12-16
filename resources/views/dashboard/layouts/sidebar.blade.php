<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Overview</span>
        </h6>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('cart') ? 'active' : '' }}" aria-current="page" href="/dashboard/cart">
              <span data-feather="home"></span>
              Keranjang
            </a>
          </li>
        </ul>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Administrator</span>
        </h6>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/barang*') ? 'active' : '' }}" href="/dashboard/barang">
                  Data barang
                </a>
                <a class="nav-link {{ Request::is('dashboard/category*') ? 'active' : '' }}" href="/dashboard/category">
                  Kategori
                </a>
            </li>
        </ul>
        @endcan
      </div>
    </nav>