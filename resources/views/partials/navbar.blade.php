<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>

        <!-- Login -->
        <ul class="navbar-nav ms-auto">
        @auth
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
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
                <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
        @endauth
        </ul>
    </div>
  </div>
</nav>