<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function createComment(Request $request) {
        $comment = new Comment();
        $comment->post_id = $request->input('post_id');
        $comment->text = $request->input('text');
        $comment->user_id = Auth::id();
        $comment->save();
        return $comment;
    }
}
