<?php

namespace App\Repositories\Category;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryRepository implements CategoryInterface
{
    public function all()
    {
        return Category::all();
    }

    public function store(\App\DTO\CategoryData $category)
    {
        DB::beginTransaction();

        try {
            $nc = new Category();
            $nc->title = $category->title;
            $nc->color = $category->color;
            $nc->save();
        } catch (\Exception $e) {
            DB::rollBack();

            throw $e;
        }

        DB::commit();

        return $nc;
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }
}
