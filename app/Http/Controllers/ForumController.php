<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Topic;
use App\Models\Opinion;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function showThemes()
    {
        $themes = Theme::all();
        return view('forum.themes.index')->with(compact('themes'));
    }

    public function showTopics($id)
    {
        $theme = Theme::find($id);

        $topics = Topic::all()->where('theme_id', '=', $id);

        return view('forum.topics.index')->with(compact('topics', 'theme'));
    }

    public function showOpinions($id)
    {
        $topic = Topic::find($id);

        $opinions = Opinion::all()->where('topic_id', '=', $id);

        return view('forum.opinions.index')->with(compact('opinions', 'topic'));
    }

    public function newOpinion($request)
    {
        /*$opinion = Opinion::find($request->input('opinion'));
        $opinion->comments()->attach(Auth::user(),['comment' => $request->input('newcomm'),'points' => $request->input('points')]);
        return redirect(route('forum.opinions',$opinion->topic))->with('success','Commentaire enregistré');*/
    }
}
