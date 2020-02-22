<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Shared\BaseCategoryController;

class CategoryController extends BaseCategoryController
{
    public function index()
    {
        return view('categories.index')->with(['categories' => parent::index()]);
    }
}
