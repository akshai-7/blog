<?php

namespace App\Http\Controllers;

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
        $posts->categorie_id = $request[''];
        $posts->user_id = $request['content'];
        $posts->save();
        return redirect('/post');
    }
}
