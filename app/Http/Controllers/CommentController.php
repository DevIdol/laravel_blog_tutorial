<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(){
        $comment = new Comment;
        $comment->content = request()->content;
        $comment->article_id = request()->article_id;
        $comment->save();

        return back();
    }

    public function delete($id){
        $comment = Comment::find($id);
        $comment->delete();

        return back();
    }
}
