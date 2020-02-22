<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseCommentController;
use App\Http\Resources\CommentResource;
use App\Http\Resources\CommentResourceCollection;

class CommentsController extends BaseCommentController
{
    public function index()
    {
        return (new CommentResourceCollection(parent::index()));
    }

    public function show($id)
    {
        return (new CommentResource(parent::show($id)));
    }

    public function store(Request $request)
    {
        return (new CommentResource(parent::store($request)));
    }
}
