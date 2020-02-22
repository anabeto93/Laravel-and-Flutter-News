<?php

namespace App\Repositories\Comment;

interface CommentInterface
{
    public function all();

    public function find($id);

    public function create(\App\DTO\CommentData $comment);
}
