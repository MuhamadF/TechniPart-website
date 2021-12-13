@extends('layouts.main')
@include('partials.navbar')

@section('container')
        <div class="container">
        {{-- Slideshow --}}
        <div id="carouselExampleCaptions" class="carousel slide mb-2" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/slide/slide1.jpg" class="d-block w-100" style="object-fit: cover; object-position: center; height:50vh" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide/slide2.jpg" class="d-block w-100" style="object-fit: cover; object-position: center; height:50vh" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide/slide3.jpg" class="d-block w-100" style="object-fit: cover; object-position: center; height:50vh" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <h1>{{ $title }}</h1>
          <hr class="mb-5">
          @if($barang->count())
          <div class="row">
          @foreach($barang as $barangs)
          <div class="col-sm-3 mb-2">
          <a href="/detail/{{$barangs->slug}}" class="text-decoration-none text-dark">
          <div class="card" style="width: 12rem;">
          <img src="..." class="card-img-top" alt="{{$barangs->image}}">
          <div class="card-body">
              <p class="card-text mb-1">{{$barangs->nama_barang}}</p>
              <h5 class="card-title">Rp. {{$barangs->harga}},-</h5>
              <small class="text-secondary">{{$barangs->category->nama}}</small>
          </div>
          </div>
          </a>
          </div>
          @endforeach
          </div>
          @else
          <p class="text-center fs-3">GAK NEMU BARANGNYA NIH</p>
          @endif
        </div>
      </div> 
    </div>
</div>

{{-- footer --}}

{{-- <div class="row mt-4 no-gutters">
    <div class="col-md-2 bg-light">
        <h5>Contact Us</h5>
        <i class="fab fa-facebook-square"></i>
        <br>
        <i class="fab fa-instagram"></i>
        <br>
        <i class="fas fa-envelope"></i>
    </div>
</div> --}}
@endsection
</body>
</html>