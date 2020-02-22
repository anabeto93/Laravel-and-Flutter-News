<?php

namespace App\Http\Controllers\Shared;

use App\DTO\CommentData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Comment\CommentInterface;
use App\Http\Controllers\Shared\Interfaces\ShowResourceInterface;
use App\Http\Controllers\Shared\Interfaces\IndexResourceInterface;
use App\Http\Controllers\Shared\Interfaces\StoreResourceInterface;

class BaseCommentController extends Controller implements IndexResourceInterface, ShowResourceInterface, StoreResourceInterface
{
    /** @var CommentInterface $comment */
    public $comment;

    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }

    public function index()
    {
        return $this->comment->all();
    }

    public function show($id)
    {
        return $this->comment->find($id);
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $comment = CommentData::fromRequest($request);
        return $this->comment->create($comment);
    }
}
