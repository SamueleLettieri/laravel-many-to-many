@extends('layouts.app')

@section('title', 'Create a new post')

@section('content')

<div class="container mt-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('admin.posts.store', $post->id)}}" method="POST">
        @csrf
        @include('admin.posts.includes.form')
    </form>
</div>


@endsection