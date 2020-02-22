<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\BaseCommentController;

class CommentController extends BaseCommentController
{
    public function index()
    {
        return view('comments.index')->withComments(parent::index());
    }

    public function show($id)
    {
        return view('comments.show')->withComment(parent::show($id));
    }

    public function store(Request $request)
    {
        $comment = parent::store($request);

        return redirect()->to('comments.show', ['id' => $comment->id])->with('success', 'Comment successfully created.');
    }
}
