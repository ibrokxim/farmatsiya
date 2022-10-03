<?php

namespace App\Http\Controllers;

use App\Events\CommentCreated;
use App\Http\Requests\CommentForm;
use App\Models\Post;
use App\Models\StatesSend;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("preview", "asc")->paginate(6);

        return view('posts.index', [
            "posts" => $posts,
        ]);
    }

    public function first(){
        $posts = Post::orderBy("created_at", "DESC")->paginate(10);

        return view('posts.first',[
            "posts" => $posts,
        ]);
    }

    public function show($id)
    {
        
        $post = Post::findOrFail($id);
        $file = $post->thumbnail;
        $files = str_replace('e/', "", $file);
        return view('posts.show', [
            "post" => $post,
            "files" => $files,
        ]);
        // $states = StatesSend::findOrFail($id);
        // return view('/publication/index', [
        //     "states" => $states,
        // ]);
    }

    public function comment($id, CommentForm $request)
    {
        $post = Post::findOrFail($id);

        $post->comments()->create($request->validated());

        return redirect(route("posts.show", $id));
    }
}
