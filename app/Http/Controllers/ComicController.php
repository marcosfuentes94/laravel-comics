<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Config::get('comics');

        return view('comics.index', compact('comics'));
    }
}
