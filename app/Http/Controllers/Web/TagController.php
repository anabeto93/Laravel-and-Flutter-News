<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseTagController;

class TagController extends BaseTagController
{
    public function index()
    {
        return view('tags.index')->with(['tags' => parent::index()]);
    }

    public function show($id)
    {
        return view('tags.show')->with(['tag' => parent::show($id)]);
    }

    public function store(Request $request)
    {
        $tag = parent::store($request);
        return redirect()->to('tags.show', ['id' => $tag->id])->with('success', 'Tag successfully created.');
    }
}
