<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class TagData extends DataTransferObject
{
    /** @var string $title */
    public $title;

    public static function fromRequest(\Illuminate\Http\Request $request): self
    {
        return new self(['title' => $request->title]);
    }
}
