<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        $post = Post::all();

        return view('user.show', [
            'user'=>$user,
            'post'=>$post
        ]);
    }
}
