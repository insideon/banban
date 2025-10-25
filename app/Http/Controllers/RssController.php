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

        // 프로젝트 소개 아이템
        $rss .= '<item>';
        $rss .= '<title><![CDATA[BANBAN의 프로젝트 쇼케이스]]></title>';
        $rss .= '<description><![CDATA[다양한 웹 애플리케이션을 직접 체험해 보세요.]]></description>';
        $rss .= '<link>'.route('home').'</link>';
        $rss .= '<guid isPermaLink="false">'.route('home').'#showcase</guid>';
        $rss .= '<pubDate>'.now()->toAtomString().'</pubDate>';
        $rss .= '</item>';

        $rss .= '</channel>';
        $rss .= '</rss>';

        return response($rss, 200)
            ->header('Content-Type', 'application/rss+xml');
    }
}
