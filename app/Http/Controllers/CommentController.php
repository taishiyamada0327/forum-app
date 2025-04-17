<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request,Post $post)
    {
        $post->comments()->create([
            'author_name' => $request->author_name,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.show', $post)->with('success', 'コメントが追加されました！');
    }

    public function destroy(Comment $comment)
    {
        $post = $comment->post;
        $comment->delete();
        return redirect()->route('posts.show', $post)->with('success', 'コメントが削除されました！');
    }
}
