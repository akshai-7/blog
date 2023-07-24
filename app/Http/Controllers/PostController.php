<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('/post');
    }
    public function createpost(Request $request)
    {

        $posts = new Post();
        $posts->title = $request['title'];
        $posts->content = $request['content'];
        $posts->categorie_id = 1;
        $posts->user_id = Auth::id();
        $posts->save();
        return redirect('/post');
    }

    public function posts()
    {
        $posts = Post::all();
        return view('/post', compact('posts'));
    }

    public function editpost($id)
    {
        $editpost = Post::where('id', $id)->get();
        return view('/editpost', compact('editpost'));
    }

    public function updatepost(Request $request, $id)
    {
        $update = Post::where('id', $request->id)->first();
        $update->title = $request['title'];
        $update->content = $request['content'];
        $update->save();
        return redirect('/post');
    }
    public function removepost($id)
    {
        $removepost = Post::find($id);
        $removepost->delete();
        return redirect('/post');
    }
}
