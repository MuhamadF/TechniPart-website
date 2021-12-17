@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mb-5">
        <h1 class="h2">Halo, {{ auth()->user()->name }}</h1>
      </div>

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{session('success')}}
      </div>
    @endif

    <table class="table table-striped">
      <tr>
        <td>Username</td>
        <td>{{auth()->user()->username}}</td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>{{auth()->user()->name}}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>{{auth()->user()->email}}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>{{auth()->user()->alamat}}</td>
      </tr>
    </table>

    <a href="/dashboard/{{$user->id}}/edit" class="btn btn-primary">Update Alamat</a>

@endsection