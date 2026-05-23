<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListJobs;

class JobController extends Controller
{
    // Ipakita ang buong listahan
    public function index()
    {
        $jobs = ListJobs::all();
        return view('jobs.index', compact('jobs'));
    }

    // Awtomatikong kukuha ng data para sa bagong pahina gamit ang ID
    public function show($id)
    {
        $job = ListJobs::findOrFail($id);
        
        // Ipapasa natin sa parehong index blade pero may kasamang solong $job data
        return view('jobs.index', [
            'jobs' => ListJobs::all(),
            'singleJob' => $job
        ]);
    }
}