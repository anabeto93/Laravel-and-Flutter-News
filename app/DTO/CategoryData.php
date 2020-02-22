<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class CategoryData extends DataTransferObject
{
    /**
     * @var string $title
     */
    public $title;

    /** @var string $color */
    public $color;

    public function fromRequest(\Illuminate\Http\Request $request): self
    {
        return new self([
            'title' => $request->title,
            'color' => $request->color,
        ]);
    }
}
