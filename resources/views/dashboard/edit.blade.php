@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Alamat {{ auth()->user()->name }}</h1>
      </div>

      <div class="col-lg-8">
        <form method="post" action="/dashboard/{{$user->id}}" class="mb-5">
        @method('put')
        @csrf
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{old('alamat', $user->alamat)}}">
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
</div>
@endsection