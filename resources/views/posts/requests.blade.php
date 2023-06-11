@extends('layouts.layout')

@section('title', 'Requests')

@section('content')
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead style="background-color: #111; color: #fff;">
            <th class="text-center py-3">#</th>
            <th class="text-center py-3">User</th>
            <th class="text-center py-3">Color</th>
            <th class="text-center py-3">Price</th>
            <th class="text-center py-3">Kilometerage</th>
            <th class="text-center py-3">Publish date</th>
            <th class="text-center py-3">Actions</th>
        </thead>
        <tbody>
            @if (count($posts) > 0)
            @foreach ($posts as $post)
            <tr class="" style="vertical-align: middle">
                <td class="text-center">{{ $post->id }}</td>
                <td class="text-center">{{ $post->user->name }}</td>
                <td class="text-center">{{ $post->car->color }}</td>
                <td class="text-center">{{ $post->car->price }}</td>
                <td class="text-center">{{ $post->car->kilometerage }}</td>
                <td class="text-center">{{ $post->date_of_publish }}</td>
                <td class="text-center d-flex justify-content-center">
                    <form action="{{ url('/posts/accept/' . $post->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-success rounded-circle mx-1"><i
                                class="fa fa-check"></i></button>
                    </form>
                    <form action="{{ url('/posts/delete/' . $post->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger rounded-circle mx-1"><i
                                class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="6" class="text-center py-3 fs-4">No posts found!</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection