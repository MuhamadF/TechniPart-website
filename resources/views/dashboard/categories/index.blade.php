@extends('dashboard.layouts.main')

@section('container')
    <h1 class="mt-4 mb-2">Data Kategori Barang</h1>
    <hr class="mb-4">

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{session('success')}}
      </div>
    @endif

    <div class="table-responsive">
          <a href="/dashboard/category/create" class="btn btn-primary mb-3"><i class="bi bi-grid"></i> Tambah Kategori</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($category as $categories)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$categories->nama}}</td>
                <td>
                    <a href="/dashboard/category/{{$categories->id}}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                    <form action="/dashboard/category/{{$categories->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>      
@endsection