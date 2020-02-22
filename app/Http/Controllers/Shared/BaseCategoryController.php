<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryInterface;
use App\Http\Controllers\Shared\Interfaces\ShowResourceInterface;
use App\Http\Controllers\Shared\Interfaces\IndexResourceInterface;
use App\Http\Controllers\Shared\Interfaces\StoreResourceInterface;

class BaseCategoryController extends Controller implements IndexResourceInterface, ShowResourceInterface, StoreResourceInterface
{
    /** @var CategoryInterface $category */
    public $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return $this->category->all();
    }

    public function store(Request $request)
    {
        $category = CategoryData::fromRequest($request);

        return $this->category->create($category);
    }

    public function show($id)
    {
        return $this->category->find($id);
    }
}
