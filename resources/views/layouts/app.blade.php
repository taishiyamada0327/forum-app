<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーラム - @yield('title', 'ホーム')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/lucide-css" rel="stylesheet">
    @stack('styles')
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('content')
    </div>

    @stack('scripts')
</body>
</html>
