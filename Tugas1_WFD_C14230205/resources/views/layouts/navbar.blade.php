<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="flex justify-between items-center p-4 bg-white shadow-md">
        <div class="text-xl font-bold">CODEFI.</div>
        <ul class="flex space-x-6">
            <li><a href="{{ route('Home') }}" class="text-brown-800 font-semibold">Home</a></li>
            <li><a href="{{ route('Catalog') }}" class="text-gray-600">Catalog</a></li>
            <li><a href="{{ route('Contact') }}" class="text-gray-600">Contact Us</a></li>
        </ul>
    </nav>

    <!-- Content -->
    <div class="w-full px-0"> 
        @yield('content')
    </div>
</body>
</html>
