<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(): JsonResponse
    {
        $posts = Post::all();

        return response()->json([
            'success' => true,
            'data' => $posts,
        ]);
    }
}
