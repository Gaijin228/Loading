<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt</title>
    <link rel="stylesheet" href="{{ asset('img/favicon.png') }}">
    @vite('resources/js/app.js')
</head>
<body>

    @include('layouts.header')
        <!-- Rubriques -->
            <div>
                <ul class="p-3 flex justify-start gap-4 text-md bg-gray-200">

                    @if ($category->parent_id !== null)
                    <li><a href="{{ route('voir_produit_par_categorie', $category->parent->id) }}" class="text-red-500 hover:underline">{{ $category->parent->nom }}</a></li>
                    @endif

                    <li><a href="#" class="text-sky-800 hover:underline">{{ $category->nom }}</a></li>

                    @foreach ($category->children as $child)
                    <li><a href="{{ route('voir_produit_par_categorie', $child->id) }}" class="text-red-500 hover:underline">{{ $child->nom }}</a></li>
                    @endforeach


                </ul>
            </div>

        </nav>
    </header>


<main class="m-14">
    @yield('content')
</main>

<footer>
    <div class="flex justify-between sm:mt-14 mt-6 sm:mb-14 mb-6 px-20 text-lg">
        <span class="text-gray-600">Mon T-Shirt</span>
        <a href="#" class="text-blue-500 hover:text-blue-600 hover:underline">Back to top</a>
    </div>
</footer>

    <script src="//unpkg.com/alpinejs" defer></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</body>
</html>
