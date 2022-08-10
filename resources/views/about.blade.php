@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $profile->name }}</h3>
    <p>{{ $profile->email }}</p>
    <img src="{{ asset('storage/'. $profile->image) }}" class="img-thumbnail rounded-circle border img-fluid" width="200" alt="{{ $profile->name }}">
@endsection
   
