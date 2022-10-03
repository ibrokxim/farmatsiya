<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use WithPagination;

use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $paginationTheme = 'bootstrap';

    public function index()
    {
        $posts = Post::orderBy("preview", "asc")->paginate(5);

        return view("admin.posts.index", [
            "posts" => $posts,
        ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.posts.create", []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PostFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        Post::create($request->validated());

        return redirect(route("admin.posts.index"))->with('succes', 'Статья была успешно создана!');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view("admin.posts.create", [
            "post" => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PostFormRequest  $request
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostFormRequest $request, Post $post)
    {
        $post->update($request->validated());

        return redirect(route("admin.posts.index"))->with('succes', 'Статья была успешно создана!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(route("admin.posts.index"));
    }
}
