<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class CommentData extends DataTransferObject
{
    /** @var string $content */
    public $content;

    /** @var \App\Models\Author $author */
    public $author;

    /** @var \App\Models\Post $post */
    public $post;

    public static function fromRequest(\Illuminate\Http\Request $request): self
    {
        return new self([
            'content' => $request->input('content'),
            'author' => \App\Models\User::find($request->input('author_id')),
            'post' => \App\Models\User::find($request->input('post')),
        ]);
    }
}
