<?php

namespace weiwait\OnlineChess\Http\Controllers;

use Illuminate\Http\Request;

use weiwait\OnlineChess\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index');
    }
}
