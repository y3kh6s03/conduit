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
                ->select('headline', 'title', 'subtitle', 'content', 'user_id', 'created_at', 'id')
                ->where('user_id', Auth::id())
                ->get();
        } else {
            $authPosts = [];
        }
        $posts = Post::with('tags')
            ->select('headline', 'title', 'subtitle', 'content', 'user_id', 'created_at', 'id')
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

    public function show($postId)
    {
        $post = Post::find($postId);
        return view('conduit.show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('conduit.edit',compact('post'));
    }

    public function update(Request $request,$id)
    {
        $post = Post::find($id);
        $post->headline = $request->headline;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;
        $post->save();
        return to_route('index');
    }
}
