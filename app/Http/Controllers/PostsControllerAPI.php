<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Http\Resources\Post as PostResource;

class PostsControllerAPI extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return PostResource::collection($posts);
    }

    public function store(Request $request)
    {
        $post               = $request->isMethod('put') ? Post::findOrFail($request->post_id) : new Post; // create or update
        $post->id           = $request->input('post_id');
        $post->title        = $request->input('title');
        $post->body         = $request->input('body');
        $post->user_id      = 1;
        $post->cover_image  = 'noimage.jpg';        
        if($post->save()) {
            return new PostResource($post);
        }
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if($post->delete()) {
            return new PostResource($post);
        }
    }
}
