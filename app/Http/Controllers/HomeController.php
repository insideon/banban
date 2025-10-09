<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $projects = collect(config('projects.projects'));

        // 상태 필터 적용
        $statusFilter = $request->get('status');
        if ($statusFilter && $statusFilter !== 'all') {
            $projects = $projects->filter(function ($project) use ($statusFilter) {
                return $project['status'] == $statusFilter;
            });
        }

        $page = $request->get('page', 1);
        $perPage = 6;

        $paginator = new LengthAwarePaginator(
            $projects->forPage($page, $perPage),
            $projects->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => ['status' => $statusFilter]]
        );

        return view('welcome', [
            'projects' => $paginator,
            'statusFilter' => $statusFilter ?? 'all',
            'statusLabels' => config('projects.status_labels'),
        ]);
    }
}
