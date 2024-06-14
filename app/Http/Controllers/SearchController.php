<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)

    {
        $title = $request->q;
        $jobs = Job::where('title', 'LIKE', "%{$title}%")->get();

        return view('results', ['jobs' => $jobs]);
    }
}
