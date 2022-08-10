@extends('dashboard.layouts.main')
    @section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Profile</h1>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-3">
            @if($profile->image)
                <img src="{{ asset('storage/'. $profile->image) }}"
                    class="img-thumbnail rounded-circle border img-fluid" alt="{{ $profile->name }}">
            @else
                <img src="{{ asset('img/profile.jpg') }}"
                    class="img-thumbnail rounded-circle border img-fluid" alt="{{ $profile->name }}">
            @endif
            <div class="d-grid">
                <a href="/dashboard/profile/{{ $profile->username }}/edit" class="btn btn-success mt-3">Edit Profile</a>
            </div>
        </div>

        <div class="col-lg-8 mt-4">
            <h3>{{ $profile->name }}</h3>
            <p class="fs-5">{{ $profile->username }}</p>
            <p class="fs-5">{{ $profile->email }}</p>
        </div>
    </div>




@endsection
