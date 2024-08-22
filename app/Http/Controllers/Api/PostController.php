<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::paginate(10);

        return response()->json([
            'success' => true,
            'results' => $posts,
        ]);
    }
}
