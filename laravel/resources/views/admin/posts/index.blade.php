@extends('layouts.app')

@section('content')

<div class="container mt-5 ">
    @if (session('deleted'))
        <h2>
            {{ session('deleted') }}
        </h2>
    @endif
    @if (session('success'))
        <h2>
            {{ session('success') }}
        </h2>
    @endif
    
    <table class="table table-success table-striped">
    <thead class="text-center">
        <th>ID</th>
        <th>USER</th>
        <th>TITLE</th>
        <th>Button</th>               
    </thead>
    <tbody class="text-center">
        @forelse ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->title}}</a></td>
            <td>
                <a href="{{route('admin.posts.edit', $post->id)}}" class="btn px-3 mx-2  btn-sm btn-primary">Edit</a>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn px-3 mx-2  btn-sm btn-danger">Remove</button>
                </form>
            </td>
        </tr>
        @empty
        @endforelse   
    </tbody>
    </table>
</div>



@endsection