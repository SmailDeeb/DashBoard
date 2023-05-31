@extends('layouts.layout')

@section('title', "Edit | $admin->name")

@section('content')
    <h1>Edit admin ({{ $admin->name }})</h1>
    <form action="{{ route('admins.update', $admin) }}" method="POST">
        {{ method_field('PUT') }}
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="test" class="form-control" id="name" name="name" value="{{ $admin->name }}" />
            <span class="text-danger error-text">@error('name'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $admin->username }}" />
            <span class="text-danger error-text">@error('username'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" />
            <span class="text-danger error-text">@error('email'){{ $message }}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="role">Admin role</label>
            <select class="form-select" id="role" name="role" aria-label="Floating label select example">
                <option disabled selected>Select admin role</option>
                @foreach ($roles as $role)
                    @if ($role->id !== 1)
                        <option value="{{ $role->id }}" {{ $admin->roles[0]->id === $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endif
                @endforeach
            </select>
            <span class="text-danger error-text">@error('role'){{ $message }}@enderror</span>
        </div>
        <button type="submit" class="btn btn-warning">Update <i class="fa fa-edit"></i></button>
        <a href="{{ route('admins.index') }}" type="button" class="btn btn-outline-secondary">Back <i class="fa fa-arrow-right"></i></a>
    </form>
@endsection
