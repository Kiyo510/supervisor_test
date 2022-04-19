<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function store(Request $request): View
    {
        $message = $request->get('body');
        Post::create(['body' => $message]);

        return view('post_done');
    }
}
