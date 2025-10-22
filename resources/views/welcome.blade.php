<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gradient-to-b from-gray-900 to-black min-h-screen">
<head>
    @include('partials.head')
    <meta name="description" content="프로젝트 쇼케이스">
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
