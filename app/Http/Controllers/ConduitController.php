<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ConduitController extends Controller
{
    public function index()
    {
        $posts=Post::with('tags')->select('headline','title','subtitle','content','user_id')->get();
        return view('conduit.index',compact('posts'));
    }
    public function create()
    {
        return view('conduit.create');
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
