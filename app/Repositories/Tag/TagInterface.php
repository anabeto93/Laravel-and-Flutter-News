<?php

namespace App\Repositories\Tag;

interface TagInterface
{
    public function all();

    public function show($id);

    public function store(\App\DTO\TagData $tag);
}
