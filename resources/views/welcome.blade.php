<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gradient-to-b from-gray-900 to-black min-h-screen">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BANBAN</title>
    <meta name="description" content="프로젝트 쇼케이스">

    <!-- 모바일 노치 배경색 설정 (다크 테마) -->
    <meta name="theme-color" content="#000000" media="(prefers-color-scheme: dark)">
    <meta name="theme-color" content="#000000">

    <!-- iOS Safari 하단 상태표시줄 색상 설정 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- iOS Safari 주소창 숨김 및 전체화면 모드 -->
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-gray-900 to-black min-h-screen flex flex-col">
    @include('partials.header')

    <main class="flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            @include('partials.hero')
            @include('partials.projects')
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
