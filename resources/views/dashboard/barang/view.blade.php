@extends('layouts.main')

@section('container')
<div class="container-fluid">
    <div class="d-flex justify-content-center">
    <a href="/dashboard/barang" class="btn btn-primary m-2"><i class="bi bi-backspace"></i> Kembali</a>
    <a href="/dashboard/barang/{{$barang->slug}}/edit" class="btn btn-warning m-2"><i class="bi bi-pencil"></i> Edit</a>
    <form action="/dashboard/barang/{{$barang->slug}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger m-2" onclick="return confirm('Yakin ingin menghapus {{$barang->nama_barang}}?')"><i class="bi bi-trash"></i> Hapus</button>
    </form>
    </div>
</div>
    <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
            <div class="col-sm-4">
                @if ($barang->image)
                    <img src="{{ asset('storage/' . $barang->image) }}" alt="{{ $barang->category->name }}" class="img-fluid mt-3">
                @else
                    <img src="..." alt="..." width="320px" class="mt-4 mb-4">
                @endif
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
                    <p class="card-text mt-3">{!! $barang->desc !!}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
