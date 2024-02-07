<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConduitController extends Controller
{
    public function index()
    {
        return view('conduit.index');
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
