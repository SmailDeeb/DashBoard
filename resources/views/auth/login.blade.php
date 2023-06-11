@extends('layouts.layout')

@section('title', 'Admin Login')

@section('content')

    <div class="d-flex justify-content-center align-items-center flex-column h-100" style="min-height: calc(100vh - 80px)">
        <h1 class="text-center mb-3">Admin Login</h1>
        <form action="{{ route('login') }}" method="POST" style="width: 400px" >
            @csrf
            <div class="form-group mb-3">
                <label for="usernameOrEmail">Username or Email</label>
                <input type="text" class="form-control  " id="usernameOrEmail"
                    placeholder="Enter username or email" name="username_or_email" />
                <small id="emailHelp" class="form-text text-muted"> We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control mb-3" id="password" placeholder="Password" name="password" />
            
            
            <button type="submit" class="btn btn-primary d-block w-100">Login</button>
        </form>
    </div>
@endsection
