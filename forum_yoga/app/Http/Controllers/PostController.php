<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Http\Requests\FavoriteForm;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts= Post::query()->orderBy("created_at", "DESC")->paginate(5);
        $category = Category::all();
        return view('posts.index',[
            'posts'=>$posts,
            'category'=>$category
        ]);
    }

    public function show($id){
        $post= Post::findOrFail($id);
        return view('posts.show',[
            'post'=>$post
        ]);
    }

    public function comment($id, CommentForm $request){
        $post= Post::findOrFail($id);

        $post->comments()->create($request->validated());
        return redirect(route("posts.show",$id));
    }

    public function favorite($id, FavoriteForm $request){
        $post= Post::findOrFail($id);

        $post->favorites()->create($request->validated());
        return redirect(route("posts.show",$id));
    }

}
