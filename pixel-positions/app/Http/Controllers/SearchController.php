<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $validSearch = request()->validate([
            'query' => 'string|min:2'
        ]);

        $jobs = Job::query()->with('tags')->where('title', 'like', '%' . $validSearch['query'] . '%')->get();
        return view('jobs.search-jobs', [
            'jobs' => $jobs
        ]);
    }
}
