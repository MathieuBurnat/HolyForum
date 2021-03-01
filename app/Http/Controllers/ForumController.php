<?php

namespace App\Http\Controllers;

use App\Models\Theme;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function showThemes()
    {
        $themes = Theme::all();
        return view('forum.themes.index')->with(compact('themes'));
    }
}
