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
              <img src="img/slide/slide1.jpg" class="d-block w-100" style="object-fit: cover; object-position: center; height:60vh" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide/slide2.jpg" class="d-block w-100" style="object-fit: cover; object-position: center; height:60vh" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slide/slide3.jpg" class="d-block w-100" style="object-fit: cover; object-position: center; height:60vh" alt="">
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
                @if ($barangs->image)
                    <img src="{{ asset('storage/' . $barangs->image) }}" alt="{{ $barangs->category->name }}" class="img-fluid mt-3">
                @else
                  <img src="..." class="card-img-top" alt="{{$barangs->image}}">
                @endif
          
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
<footer class="footer">
  <div class="ft">
      <div class="row">
          <div class="footer-col">
               <h4>company</h4>
               <ul>
                  <li><a href="...">about us</a></li>
                  <li><a href="...">our services</a></li>
                  <li><a href="...">privacy policy</a></li>
                  <li><a href="...">affiliate program</a></li>
               </ul>
          </div>
              <div class="footer-col">
                <h4>our team</h4>
                <ul>
                  <li><a href="...">Muhamad Fawwazt S</a></li>
                  <li><a href="...">Rizky Angga Saputra</a></li>
                  <li><a href="...">rifqi muliawan</a></li>
                  <li><a href="...">devis suparlan</a></li>
                  <li><a href="...">nelli Marliana</a></li>
                </ul>
              </div>
              <div class="footer-col">
                  <h4>online shop</h4>
                  <ul>
                      <li><a href="...">processor</a></li>
                      <li><a href="...">motherboard</a></li>
                      <li><a href="...">Accessories</a></li>
                      <li><a href="...">ram</a></li>
                      <li><a href="...">cpu</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                <h4>follow us</h4>
                  <div class="social-links">
                    <a href="..."><i class="fab fa-facebook-f"></i></a><br>
                    <a href="..."><i class="fab fa-twitter"></i></a><br>
                    <a href="..."><i class="fab fa-instagram"></i></a>
                  </div>
             </div>
             <div class="container px-4 px-lg-5 mt-1">
               <hr class="text-white">
               <p class="text-white text-center">Copyright &copy; TechniPart Team 2021</p>
             </div>
      </div>
    </div>
</footer>

{{-- Akhir footer --}}
@endsection
</body>
</html>