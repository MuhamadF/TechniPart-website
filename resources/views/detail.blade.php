@extends('layouts.main')
@include('partials.navbar')

{{-- coba --}}

@section('container')
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
            <div class="col-sm-4">
                <img src="..." alt="..." width="320px" class="mt-4 mb-4">
            </div>
            <div class="col-md-5">
                <div class="card border-white mb-3" style="max-width: 30rem;">
                <div class="card-body">
                    <h3 class="card-title">{{$barang->nama_barang}}</h3>
                    <p class="fw-bold">Terjual <span class="fw-normal">10</span></p>
                    <h1 class="card-text mb-3"> 
                        @money($barang->harga)
                    </h1>
                    <p class="card-text fw-bold mb-1">Rincian</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        <p class="card-text">Kategori :  <a href="" class="text-decoration-none">{{$barang->category->nama}}</a></p>
                        </li>
                        <li class="list-group-item">
                            <p class="card-text">
                                Support :  {{$barang->socket}} - {{$barang->ram_support}}
                            </p></li>
                        <li class="list-group-item"><p class="card-text">Tersedia :  {{$barang->stok}} unit</p></li>
                    </ul>
                    <p class="card-text mt-3">{{$barang->desc}}</p>
                    <form action="" class="d-flex">
                    <button type="button" class="btn btn-outline-primary px-5 me-3">Beli Sekarang</button>
                    <button type="button" class="btn btn-outline-primary px-5">Keranjang</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
