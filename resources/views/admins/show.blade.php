@extends('layouts.layout')

@section('title', "Info | $admin->name")

@section('content')
    <h1>Info ({{ $admin->name }})</h1>

    <div class="d-flex justify-content-center align-items-center w-100 mt-5">
        <div class="card text-center w-50">
            <ul class="list-group list-group-flush">
                <li class="list-group-item row d-flex">
                    <span class="col-4 text-end">Name:</span>
                    <span class="col-8 text-start">{{ $admin->name }}</span>
                </li>
                <li class="list-group-item row d-flex">
                    <span class="col-4 text-end">Username:</span>
                    <span class="col-8 text-start">{{ $admin->username }}</span>
                </li>
                <li class="list-group-item row d-flex">
                    <span class="col-4 text-end">Email:</span>
                    <span class="col-8 text-start">{{ $admin->email }}</span>
                </li>
                <li class="list-group-item row d-flex">
                    <span class="col-4 text-end">Type:</span>
                    <span class="col-8 text-start">{{ $admin->roles[0]->name }}</span>
                </li>
            </ul>
            <div class="card-footer text-muted">
                {{ $admin->created_at }}
            </div>
            <div class="card-body">
                @can('delete-user')
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete
                        <i class="fa fa-trash ms-2"></i></button>
                @endcan
                <a href="{{ route('admins.index') }}" class="btn btn-outline-secondary">Back <i
                        class="fa fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>

    @can('delete-user')
        <div class="modal" id="exampleModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Admin ({{ $admin->name }})</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this admin?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No <i
                                class="fa fa-close ms-2"></i></button>
                        {{-- <button type="button" class="btn btn-danger admin-confirm-delete">Yes, Delete <i class="fa fa-trash ms-2"></i></button> --}}
                        <form action="{{ route('admins.destroy', $admin) }}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button type="submit" class="btn btn-danger">Yes, Delete <i class="fa fa-trash ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@endsection
