<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RssController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// RSS 피드
Route::get('/rss.xml', RssController::class)->name('rss');

// Sitemap
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
