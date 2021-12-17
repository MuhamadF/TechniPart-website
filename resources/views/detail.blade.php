@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        @if(session()->has('fail'))
            <div class="alert alert-danger" role="alert">
                {{session('fail')}}
            </div>
        @endif
        <div class="col-sm-4">
                @if ($barang->image)
                    <img src="{{ asset('storage/' . $barang->image) }}" alt="{{ $barang->category->name }}" width="320px" class="img-fluid mt-3">
                @else
                    <img src="..." alt="..." width="320px" class="mt-4 mb-4">
                @endif
                <div class="card-text text-center mb-2 mt-5">Scan halaman ini</div>
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{url()->full()}}" alt="" class="d-block mx-auto">
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
                        <p class="card-text">Kategori :  <a href="/?category={{$barang->category->nama}}" class="text-decoration-none">{{$barang->category->nama}}</a></p>
                        </li>
                        <li class="list-group-item">
                            <p class="card-text">
                                Support :  {{$barang->socket}} - {{$barang->ram_support}}
                            </p></li>
                        <li class="list-group-item"><p class="card-text">Tersedia :  {{$barang->stok}} unit</p></li>
                    </ul>
                    <p class="card-text mt-3">{!! $barang->desc !!}</p>
                    <form action="/dashboard/cart" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="barang_id" value="{{$barang->id}}">
                        <button type="submit" class="btn btn-outline-primary px-5">Masukan Keranjang</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>