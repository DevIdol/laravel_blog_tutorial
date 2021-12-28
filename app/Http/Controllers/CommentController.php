<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $comment = new Comment;
        $comment->content = request()->content;
        $comment->article_id = request()->article_id;
        $comment->user_id = auth()->user()->id;
        $comment->save();

        return back();
    }

    public function delete($id)
    {
        $comment = Comment::find($id);

        if (Gate::denies('comment-delete', $comment)) {
            return back()->with('error', 'Unauthorize');
        }
        $comment->delete();
        return back();

        // if (Gate::allows('comment-delete', $comment)) {
        //     $comment->delete();
        //     return back();
        // } else {
        //     return back()->with('error', 'Unauthorize');
        // }


        // if ($comment->user_id == auth()->user()->id) {
        //     $comment->delete();
        //     return back();
        // } else {
        //     return back()->with('error', 'Unauthorize');
        // }
    }
}
