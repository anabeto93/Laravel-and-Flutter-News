<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryResourceCollection;
use App\Http\Controllers\Shared\BaseCategoryController;

class CategoryController extends BaseCategoryController
{
    public function index()
    {
        return new CategoryResourceCollection(parent::index());
    }

    public function show($id)
    {
        return (new CategoryResource(parent::show($id)));
    }

    public function store(Request $request)
    {
        return (new CategoryResource(parent::store($request)));
    }
}
