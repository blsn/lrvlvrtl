@extends('layouts.app')
@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card bg-light mt-2">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="card-body">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-2">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection