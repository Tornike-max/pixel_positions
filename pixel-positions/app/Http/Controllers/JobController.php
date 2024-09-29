<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Employer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featuredJobs = Job::with('tags')->where('featured', '=', 1)->latest()->simplePaginate(3);
        $jobs = Job::with('tags')->where('featured', '=', 0)->latest()->simplePaginate(6);


        return view('jobs.index', [
            'featuredJobs' => $featuredJobs,
            'jobs' => $jobs,
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

        $attributes['employer_id'] = Auth::user()->employer->id;


        if ($attributes['featured']) {
            $attributes['featured'] = $attributes['featured'] === 'yes' ? true : false;
        }

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            $job->addTags(explode(',', $attributes['tags']));
        }

        return redirect()->to('/')->with(['message' => 'Job created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $job->load(['employer', 'tags']);
        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        $validatedData = $request->validated();

        if ($validatedData['tags'] ?? false) {
            $job->addTags(explode(',', $validatedData['tags']));
        }

        if (isset($validatedData['featured'])) {
            $validatedData['featured'] = $validatedData['featured'] === 'yes' ? true : false;
        }

        $res = $job->update($validatedData);
        if ($res) {
            return redirect()->to('/')->with(['message' => 'Job updated successfully']);
        } else {
            throw ValidationException::withMessages(['message' => 'something went wrong']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
