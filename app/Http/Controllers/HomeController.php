<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $projects = collect(config('projects.projects'));
        $page = $request->get('page', 1);
        $perPage = 6;

        $paginator = new LengthAwarePaginator(
            $projects->forPage($page, $perPage),
            $projects->count(),
            $perPage,
            $page,
            ['path' => $request->url()]
        );

        return view('welcome', [
            'projects' => $paginator,
        ]);
    }
}
