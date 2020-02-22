<?php

namespace App\Repositories\Tag;

interface TagInterface
{
    public function all();

    public function find($id);

    public function create(\App\DTO\TagData $tag);
}
