<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Resources\PostResource;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->latest()->paginate(20);
        return inertia::render('Home', [
            'posts' => PostResource::collection($posts),
        ]);
    }
}