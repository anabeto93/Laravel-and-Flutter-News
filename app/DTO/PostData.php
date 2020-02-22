<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class PostData extends DataTransferObject
{
    /**
     * @var string title
     */
    public $title;

    /**
     * @var string content
     */
    public $content;

    /**
     * @var \App\Models\User $author
     */
    public $author;

    /**
     * @var \App\Models\Category $category
     */
    public $category;

    /**
     * @var string $type
     */
    public $type;

    /**
     * @var array $meta_data
     */
    public $meta_data;

    public static function fromRequest(Request $request): self
    {
        return new self([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author' => \App\Models\User::find($request->input('author_id')),
            'category' => \App\Models\Category::find($request->input('category_id')),
            'type' => $request->input('post_type'),
            'meta_data' => $request->input('meta_data')
        ]);
    }
}
