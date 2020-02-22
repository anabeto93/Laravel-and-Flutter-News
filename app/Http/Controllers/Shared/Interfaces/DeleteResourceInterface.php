<?php

namespace App\Http\Controllers\Shared\Interfaces;

interface DeleteResourceInterface
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id);
}
