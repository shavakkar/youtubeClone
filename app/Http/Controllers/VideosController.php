<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{

    public function show($id)
    {
        return Inertia::render('Video');
    }

    public function destory($id)
    {
    }
}
