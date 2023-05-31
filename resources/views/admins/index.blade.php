@extends('layouts.layout')

@section('title', 'Admins')

@section('content')
    <h1 class="d-flex justify-content-between">
        Admins
        @can('create-user')
            <a href="{{ route('admins.create') }}" class="btn btn-outline-primary d-flex align-items-center"><i
                    class="fa fa-plus me-2"></i> Add New Admin</a>
        @endcan
    </h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                    <th scope="col">Created At</th>
                    <th scope="col">ِActions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    <tr class="show-buttons text-center align-middle">
                        <th scope="row">{{ $admin->id }}</th>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->username }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            @foreach ($admin->roles as $role)
                                @if ($role->id === 1)
                                    <div class="badge text-bg-primary p-2">{{ $role->name }}</div>
                                @elseif ($role->id === 2)
                                    <div class="badge text-bg-warning p-2">{{ $role->name }}</div>
                                @elseif ($role->id === 3)
                                    <div class="badge text-bg-dark p-2">{{ $role->name }}</div>
                                @elseif ($role->id === 4)
                                    <div class="badge text-bg-success p-2">{{ $role->name }}</div>
                                @else
                                    <div class="badge text-bg-secondary p-2">{{ $role->name }}</div>
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $admin->created_at }}</td>
                        <td class="position-relative overflow-hidden">
                            {{-- @if (true) --}}
                            @if ($admin->id !== 1)
                                <div class="table-buttons">
                                    @can('show-user')
                                        <a href="{{ route('admins.show', $admin) }}"
                                            class="table-button btn btn-info rounded-circle mx-1" style="--button-number: 1"><i
                                                class="fa fa-info"></i></a>
                                    @endcan
                                    @can('edit-user')
                                        <a href="{{ route('admins.edit', $admin) }}"
                                            class="table-button btn btn-warning rounded-circle mx-1"
                                            style="--button-number: 2"><i class="fa fa-edit"></i></a>
                                    @endcan
                                    {{-- <button type="button" data-admin="{{ json_encode($admin) }}" id="deleteAdmin_{{ $admin->id }}"
                                        class="table-button btn btn-danger rounded-circle mx-1 delete-admin"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal" style="--button-number: 3"><i
                                            class="fa fa-trash"></i></button> --}}
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
