@extends('layouts.main')

@include('partials.navbar')
@include('belanja.layouts.navbar')

@section('container')
<div class="container">
    <h1>{{ $title }}</h1>
    <hr class="mb-5">
    @if($barang->count())
    <div class="row">
    @foreach($barang as $barangs)
    <div class="col-sm-3 mb-2">
    <a href="#" class="text-decoration-none text-dark">
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
    <p class="text-center fs-3">POST NOT FOUND</p>
    @endif
</div>
@endsection