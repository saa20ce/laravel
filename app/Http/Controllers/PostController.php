<?php

namespace App\Http\Controllers;

use App\Events\CommentCreated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function comment($id, CommentFrom $request)
    {
        $post = Post::findOrFail($id);

        $comment = $post->comment()->create($request->validated());

        event(new CommentCreated($comment));
        
        return redirect(route("post.show", $id));
    }
}
