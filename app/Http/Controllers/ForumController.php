<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Topic;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function showThemes()
    {
        $themes = Theme::all();
        return view('forum.themes.index')->with(compact('themes'));
    }

    public function showTopics()
    {
        //$topics = Topic::find($fk_theme);
        $topics = Topic::all();
        return view('forum.topics.index')->with(compact('topics'));
    }
}
