<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class TagData extends DataTransferObject
{
    /** @var string $title */
    public $title;

    public function fromRequest(\Illuminate\Http\Request $request): self
    {
        return new self(['title' => $request->title]);
    }
}
