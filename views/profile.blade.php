@extends('layouts.main')

@section('title', 'Profile')

@section('deepta')
<div class="card">
    <div class="card-header">
        <h2>Profile</h2>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Profile Setting</h1>
                <p class="lead" align="justify">
                    Selamat Datang Di Setting Profile. Pada laman ini kamu bisa mengubah hal-hal yang berkaitan dengan Profilemu!1
                </p>
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="profile_image">Profile Image:</label>
                        @if (Auth::user()->profile_image)
                        <div>
                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile Image" height="150" width="150">
                        </div>
                        @endif
                        <input type="file" class="form-control-file" id="profile_image" name="profile_image">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
                <hr>
                <h3>Change Password</h3>
                <form action="{{ route('profile.update.password') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Password Baru</label>
                        <input type="password" name="password_baru" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password Baru</label>
                        <input type="password" name="password_baru_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
