<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav p-1">
          <li class="nav-item dropdown mt-2 mx-3">
            <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
            <ul class="dropdown-menu">
            @foreach($category as $categories)
              <li><a class="dropdown-item" href="/belanja?category={{$categories->slug}}">{{$categories->nama}}</a></li>
            @endforeach
            </ul>
            <li class="nav-item">
            <form class="d-flex mt-2 mx-3" action="/belanja">
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