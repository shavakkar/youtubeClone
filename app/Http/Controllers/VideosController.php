<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Inertia\Inertia;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{

    public function show($id)
    {
        return Inertia::render('Video', [
            'video' => Video::find($id),
            'comments' => Comment::all(),
            'recommendedVideos' => Video::inRandomOrder()->get(),
        ]);
    }

    public function destory($id)
    {
    }
}
