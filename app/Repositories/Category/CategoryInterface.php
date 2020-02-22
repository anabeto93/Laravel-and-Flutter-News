<?php

namespace App\Repositories\Category;

interface CategoryInterface
{
    public function all();

    public function store(\App\DTO\CategoryData $category);

    public function show($id);
}
