<?php

namespace App\Http\Controllers\Shared;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\Interfaces\ShowResourceInterface;
use App\Http\Controllers\Shared\Interfaces\IndexResourceInterface;
use App\Http\Controllers\Shared\Interfaces\StoreResourceInterface;

class BaseImageController extends Controller implements IndexResourceInterface, ShowResourceInterface, StoreResourceInterface
{
    //
}
