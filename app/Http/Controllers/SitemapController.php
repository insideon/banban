<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // 홈페이지
        $sitemap .= '<url>';
        $sitemap .= '<loc>'.route('home').'</loc>';
        $sitemap .= '<lastmod>'.now()->toAtomString().'</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>1.0</priority>';
        $sitemap .= '</url>';

        $sitemap .= '</urlset>';

        return response($sitemap, 200)
            ->header('Content-Type', 'application/xml');
    }
}
