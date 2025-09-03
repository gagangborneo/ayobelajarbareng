<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{

    public function index()
    {
        return view('pages.chat.index');
    }
}
