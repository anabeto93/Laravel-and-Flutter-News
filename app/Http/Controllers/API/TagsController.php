<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseTagController;

class TagsController extends BaseTagController
{
    public function index()
    {
        return (new TagResourceCollection(parent::index()));
    }

    public function show($id)
    {
        return (new TagReource(parent::show($id)));
    }

    public function store(Request $request)
    {
        return (new TagResource(parent::store($request)));
    }
}
