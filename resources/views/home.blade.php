<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt</title>
    <link href="{{ asset('img/favicon.png') }}" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body>

    @include('layouts.header')

    </nav>
    </header>


    <main>
        @yield('content')
    </main>

    <footer>
        <div class="flex justify-between sm:mt-14 mt-6 sm:mb-14 mb-6 px-20 text-lg">
            <span class="text-gray-600">Mon T-Shirt</span>
            <a href="#" class="text-blue-500 hover:text-blue-600 hover:underline">Back to top</a>
        </div>
    </footer>

    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
