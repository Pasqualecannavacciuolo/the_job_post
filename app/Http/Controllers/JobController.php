<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;

class JobController extends Controller
{
    public function show(): View
    {
        $jobs = Job::with('business')->latest()->simplePaginate(9);
        return view('job.index', ['jobs' => $jobs]);
    }

    public function show_details(Job $job): View
    {
        //$job = Job::with('business')->findOrFail($id);
        return view('job.details', ['job' => $job]);
    }

    public function show_edit(Job $job): View
    {
        return view('job.edit', ['job' => $job]);
    }

    public function edit_job(Job $job)
    {
        // Validate input
        $validatedAttributes = request()->validate([
            'title' => ['required', 'max:50'],
            'description' => ['required'],
            'salary' => ['required']
        ]);
        // Register changes in Database
        $job->update($validatedAttributes);
        // Redirect
        return redirect('/jobs/' . $job->id);
    }
}
