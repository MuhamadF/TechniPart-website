@extends('dashboard.layouts.main')

@section('container')
    <h1 class="mt-4 mb-2">Data Barang</h1>
    <hr class="mb-4">

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{session('success')}}
      </div>
    @endif

    <div class="table-responsive">
          <a href="/dashboard/barang/create" class="btn btn-primary mb-3"><i class="bi bi-bag-plus"></i> Tambah Barang</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Barang</th>
              <th scope="col">Harga</th>
              <th scope="col">Kategori</th>
              <th scope="col">Stock</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($barang as $barangs)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$barangs->nama_barang}}</td>
                <td>{{$barangs->harga}}</td>
                <td>{{$barangs->category->nama}}</td>
                <td>{{$barangs->stok}}</td>
                <td>
                    <a href="/dashboard/barang/{{ $barangs->slug }}" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                    <a href="/dashboard/barang/{{$barangs->slug}}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                    <form action="/dashboard/barang/{{$barangs->slug}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus {{$barangs->nama_barang}}?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>      
@endsection