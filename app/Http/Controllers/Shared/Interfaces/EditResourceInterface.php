<?php

namespace App\Http\Controllers\Shared\Interfaces;

interface EditResourceInterface
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id);
}
