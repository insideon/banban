<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<!-- 네이버 서치어드바이저 사이트 소유확인 -->
<meta name="naver-site-verification" content="bf22cba8573016902d2ee0a34971c566100b628c" />

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

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
