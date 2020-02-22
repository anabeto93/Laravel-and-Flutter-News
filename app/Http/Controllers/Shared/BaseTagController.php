<?php

namespace App\Http\Controllers\Shared;

use App\DTO\TagData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Tag\TagInterface;
use App\Http\Controllers\Shared\Interfaces\ShowResourceInterface;
use App\Http\Controllers\Shared\Interfaces\IndexResourceInterface;
use App\Http\Controllers\Shared\Interfaces\StoreResourceInterface;

class BaseTagController extends Controller implements IndexResourceInterface, ShowResourceInterface, StoreResourceInterface
{
    /** @var TagInterface $tag */
    public $tag;

    public function __construct(TagInterface $tag)
    {
        $this->tag = $tag;
    }

    public function index()
    {
        return $this->tag->all();
    }

    public function store(Request $request)
    {
        $tag = TagData::fromRequest($request);

        return $this->tag->store($tag);
    }

    public function show($id)
    {
        return $this->tag->show($id);
    }
}
