<?php

namespace App\Repositories\Category;

interface CategoryInterface
{
    public function all();

    public function create(\App\DTO\CategoryData $category);

    public function find($id);
}
