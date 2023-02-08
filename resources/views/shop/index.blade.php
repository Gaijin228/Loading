
@extends('home')

@section('content')

    <section>
        <div class="sm:mt-14 mt-6 flex flex-col items-center text-gray-800 font-light">
            <h1 class="sm:text-4xl text-2xl">Commandez votre</h1><br>
            <span class="-mt-3 sm:text-3xl text-2xl font-bold">nouveau</span><br>
            <span class="sm:text-4xl -mt-4 text-3xl">T-Shirt <span class="bg-blue-500 font-bold sm:text-3xl text-2xl text-white px-3 py-1 rounded-md">préféré</span>!</span><br>
            <span class="sm:text-xl text-md text-gray-500 -mt-3">Dénichez THE T-Shirt de votre série, films préféré(e).</span>
        </div>
    </section>

    <section class="mt-24 p-2 bg-gray-200">
        <div class="mx-14 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

            @foreach($produits as $produit)
                <div class="max-w-sm border border-double shadow-lg rounded-lg bg-white">
                    <img src="{{ asset('img/' . $produit->photo_principale) }}" alt="mon produit" class="rounded-t-lg">
                    <div class="mt-4 px-4">
                        <h5 class="text-xl text-gray-600 font-bold">{{ $produit->nom }}</h5>
                        <span>{{ $produit->description }}</span><br>
                        <span class="text-md text-cyan-700 font-bold hover:text-blue-700"><a href="{{ route('voir_produit_par_categorie', $produit->category->id) }}">{{ $produit->category->nom }}</a></span><br>
                        <div class="mt-3 flex justify-between mb-3">
                            <span class="text-lg text-blue-700 font-bold">{{ number_format($produit->prix_ht, 2) }} €</span>
                            <a href="{{ route('voir_produit', $produit->id) }}" target="_blank" class="bg-yellow-400 hover:bg-cyan-700 rounded-md px-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 24"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

@endsection
