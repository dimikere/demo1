<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return response()->json(Posts::get(),200);
    }

    public function show($id)
    {
        return response()->json(Posts::find($id),200);
    }

    public function store(Posts $posts)
    {
        $post = Posts::create($posts->all());
        return response()->json($post,200);
    }
}
