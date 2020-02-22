<?php

namespace App\Repositories\Comment;

use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentRepository implements CommentInterface
{
    public function all()
    {
        return Comment::all();
    }

    public function find($id)
    {
        return Comment::findOrFail($id);
    }

    public function create(\App\DTO\CommentData $comment)
    {
        DB::beginTransaction();

        try {
            $nc = new Comment();
            $nc->content = $comment->content;
            $nc->psot_id = $comment->post->id;
            $nc->author_id = $comment->author->id;
            $nc->save();
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }
        DB::commit();

        return $nc;
    }
}
