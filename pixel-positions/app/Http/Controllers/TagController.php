<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('jobs.search-jobs', [
            'jobs' => $tag->jobs
        ]);
    }
}
