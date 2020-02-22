<?php

namespace App\Http\Controllers\Shared\Interfaces;

interface ShowResourceInterface
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id);
}
