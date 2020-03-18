@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card bg-light">
                <div class="card-body">
                    <h3>{{$post->title}}</h3>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection
