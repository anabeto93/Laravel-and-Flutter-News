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

    public function show($id)
    {
        return view('categories.show')->with(['category' => parent::show($id)]);
    }

    public function store(Request $request)
    {
        parent::store($request);
        return redirect()->to('categories.show', ['id' => $category->id])->with('success', 'Category successfully created.');
    }
}
