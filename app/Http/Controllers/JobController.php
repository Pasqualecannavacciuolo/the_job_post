<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\View\View;

class JobController extends Controller
{
    public function show(): View
    {
        $jobs = Job::with('business')->latest()->simplePaginate(2);
        return view('job.index', ['jobs' => $jobs]);
    }

    public function show_details(int $id): View
    {
        $job = Job::with('business')->findOrFail($id);
        return view('job.details', ['job' => $job]);
    }
}
