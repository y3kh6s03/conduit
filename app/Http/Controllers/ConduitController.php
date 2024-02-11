<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConduitController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $authPosts = Post::with('tags')
                ->select('headline', 'title', 'subtitle', 'content', 'user_id', 'created_at')
                ->where('user_id', Auth::id())
                ->get();
        } else {
            $authPosts = [];
        }
        $posts = Post::with('tags')
            ->select('headline', 'title', 'subtitle', 'content', 'user_id', 'created_at')
            ->get();

        return view('conduit.index', compact('posts', 'authPosts'));
    }
    public function create()
    {
        return view('conduit.create');
    }
    public function store(Request $request)
    {
        Post::create([
            'user_id' => $request->id,
            'headline' => $request->headline,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
        ]);
        return to_route('index');
    }
    public function show()
    {
        return view('conduit.show');
    }
    public function edit()
    {
        return view('conduit.edit');
    }
}
