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
}
