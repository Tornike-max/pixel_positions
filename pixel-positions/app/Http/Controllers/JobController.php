<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featuredJobs = Job::all()->groupBy('featured');



        return view('jobs.index', [
            'featuredJobs' => $featuredJobs[0],
            'jobs' => $featuredJobs[1],
            'tags' => []
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $attributes = $request->validated();

        $tags = request('tags') ?? null;

        $attributes['employer_id'] = Auth::user()->employer->id;
        if ($attributes['featured']) {
            $attributes['featured'] = $attributes['featured'] === 'yes' ? true : false;
        }

        $job = Auth::user()->employer->jobs()->create($attributes);

        if ($tags) {
            foreach (explode(',', $tags) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect()->to('/')->with(['message' => 'Job created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
