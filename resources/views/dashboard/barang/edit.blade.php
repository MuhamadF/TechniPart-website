@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit {{$barang->nama_barang}}</h1>
      </div>

      <div class="col-lg-8">
        <form method="post" action="/dashboard/barang/{{$barang->slug}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" name="nama_barang" required autofocus value="{{old('nama_barang', $barang->nama_barang)}}">
                @error('nama_barang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{old('slug', $barang->slug)}}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required autofocus value="{{old('nama_barang', $barang->harga)}}">
                @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="socket" class="form-label">Socket</label>
                <input type="text" class="form-control" id="socket" name="socket" required value="{{old('socket', $barang->socket)}}">
            </div>
            <div class="mb-3">
                <label for="ram_support" class="form-label">RAM Support</label>
                <input type="text" class="form-control" id="" name="ram_support" required value="{{old('ram_support', $barang->ram_support)}}">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stock Barang</label>
                <input type="text" class="form-control" id="stok" name="stok" required value="{{old('stok', $barang->stok)}}">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach($categories as $category)
                        @if(old('category_id') == $category->id)
                            <option value="{{ $category->id}}" selected>{{ $category->nama}}</option>
                        @else
                            <option value="{{ $category->id}}">{{ $category->nama}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label @error('desc') is-invalid @enderror">Body</label>
                @error('desc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <input id="desc" type="hidden" name="desc" value="{{old('desc', $barang->desc)}}">
                <trix-editor input="desc"></trix-editor>
            </div>
           
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>
@endsection