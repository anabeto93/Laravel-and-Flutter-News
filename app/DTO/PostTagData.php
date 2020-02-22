<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class PostTagData extends DataTransferObject
{
    /** @var int $post_id*/
    public $post_id;

    /** @var int $tag_id */
    public $tag_id;

    public static function fromRequest(\Illuminate\Http\Request $request) : self
    {
        return new self([
            'post_id' => $request->input('post_id'),
            'tag_id' => $request->input('tag_id'),
        ]);
    }
}
