<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Orion\Concerns\DiableAuthorization;
use Orion\Http\Controllers\Controller;

class ItemController extends Controller
{
    //
    // use DiableAuthorization;
    protected $model = Item::class;
}
