@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mb-5">
        <h1 class="h2">Halo, {{ auth()->user()->name }}</h1>
      </div>

      <h3 class="mb-5">Rincian profil</h3>
      <img src="" alt="asd" width="30px" class="mb-5">
      <div class="table-responsive">
      <table class="table table-borderless">
        <tr>
          <td class="w-25">Username</td>
          <td>:</td>
          <td>{{auth()->user()->username}}</td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>{{auth()->user()->name}}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td>{{auth()->user()->email}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>{{auth()->user()->alamat}}</td>
        </tr>
      </table>
      </div>

@endsection