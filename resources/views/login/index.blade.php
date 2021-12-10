@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center">Login dulu</h5>

                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                <form action="/login" method="post">
                @csrf
                    <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control mb-3 @error('username') is-invalid @enderror" id="username" name="username" autofocus required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-control mb-3" name="password" required>

                    <button class="w-100 btn btn-lg btn-dark" type="submit">Masuk</button>
                </form>
                <p>Bukan member? Registrasi di <a href="/registrasi">sini</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
