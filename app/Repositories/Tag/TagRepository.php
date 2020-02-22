<?php

namespace App\Repositories\Tag;

use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class TagRepository implements TagInterface
{

    public function all()
    {
        return Tag::all();
    }

    public function find($id)
    {
        return Tag::findOrFail($id);
    }

    public function create(\App\DTO\TagData $tag)
    {
        DB::beginTransaction();

        try {
            $nt = new Tag();
            $nt->title = $tag->title;
            $nt->save();
        } catch(\Exception $e) {
            DB::rollBack();

            throw $e;
        }
        DB::commit();

        return $nt;
    }
}
