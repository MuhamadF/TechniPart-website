@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center">Registrasi Form</h5>
                <form action="/register" method="post">
                    @csrf
                        <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name') }}">
                          @error('name')
                              <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control mb-3 @error('username') is-invalid @enderror" id="username" name="username" autofocus required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" autofocus required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror    
                        <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control mb-3" name="password" required>
    
                        <button class="w-100 btn btn-lg btn-dark" type="submit">Register</button>
                    </form>
                <p>Sudah registrasi? Login di <a href="/login">Sini</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
