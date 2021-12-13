@extends('layouts.main')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('container')
{{-- Slideshow --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
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

    <h5 class="text-center font-weight-bold m-4">NEW PRODUCTS</h5>
        <div class="container m-5">
            <div class="row m-4">
              <div class="card me-5" style="width: 18rem;" >
                  <img src="img/product/shirt1.jpg" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">CPU</h5>
                      <p class="card-text">Armagedon A-45</p>
                      <p class="card-text text-success">Rp 500.000</p>
                      <a href="#" class="btn btn-primary">Details</a>
                  </div>
                </div>

              <div class="card me-5" style="width: 18rem;">
                  <img src="img/product/shirt2.jpg" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Processor</h5>
                      <p class="card-text">AMD Ryzen 7</p>
                      <p class="card-text text-success">Rp 3.000.000</p>
                      <a href="#" class="btn btn-primary">Details</a>
                  </div>
              </div>

              <div class="card me-5" style="width: 18rem;">
                  <img src="img/product/shirt1.jpg" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Ram</h5>
                      <p class="card-text">Corsair 16 GB</p>
                      <p class="card-text text-success">Rp 1.750.000</p>
                      <a href="#" class="btn btn-primary">Details</a>
                  </div>
              </div>
          </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>
</html>