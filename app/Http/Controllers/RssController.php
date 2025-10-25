<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class RssController extends Controller
{
    public function __invoke(): Response
    {
        $rss = '<?xml version="1.0" encoding="UTF-8"?>';
        $rss .= '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
        $rss .= '<channel>';
        $rss .= '<title>'.config('app.name').'</title>';
        $rss .= '<description>'.config('app.name').'의 최신 소식을 확인하세요.</description>';
        $rss .= '<link>'.route('home').'</link>';
        $rss .= '<language>ko-KR</language>';
        $rss .= '<lastBuildDate>'.now()->toAtomString().'</lastBuildDate>';
        $rss .= '<atom:link href="'.route('rss').'" rel="self" type="application/rss+xml" />';
        $rss .= '</channel>';
        $rss .= '</rss>';

        return response($rss, 200)
            ->header('Content-Type', 'application/rss+xml');
    }
}
