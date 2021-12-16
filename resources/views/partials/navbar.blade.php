<div class="sticky-top">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Halaman Utama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang kami</a>
        </li>
      </ul>

        <!-- Login -->
        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item">
        <a class="nav-link px-5" href="/dashboard/cart"><i class="bi bi-cart"></i> Keranjang</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Halo, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><form action="/logout" method="post">
                @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                </form>
                </li>
            </ul>
        </li>

        @else
            <li class="nav-item">
                <a href="/register" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link">Login</a>
            </li>
        @endauth
        </ul>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <p class="text-white mx-2 mt-3">TechniPART</p>
      <div class="navbar-collapse justify-content-md-center">
        <ul class="navbar-nav p-1">
          <li class="nav-item dropdown mt-2">
            <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-grid"></i> Kategori</a>
            <ul class="dropdown-menu">
            @foreach($category as $categories)
              <li><a class="dropdown-item" href="/?category={{$categories->slug}}">{{$categories->nama}}</a></li>
            @endforeach
            </ul>
            <li class="nav-item">
            <form class="d-flex mt-2 mx-3" action="/">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{request('category')}}">
                @endif
                <input class="form-control me-2" type="text" placeholder="Cari" name="search" value="{{request('search')}}">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>