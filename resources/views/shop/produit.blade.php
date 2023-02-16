@extends('shop')

@section('content')
    <!-- Afficher un produit uniquement -->
    <section class="p-4 md:flex md:justify-center gap-8">

        <div class="max-w-lg max-h-md border border-double shadow-lg rounded-lg bg-white">
            <img src="{{ asset('img/' . $produit->photo_principale) }}" alt="produit" class="rounded-t-lg">
        </div>

        <div>
            <h5 class="text-3xl text-gray-600">{{ $produit->nom }}</h5>
            <div class="mt-3 flex justify-between mb-3">
                <span class="text-lg text-blue-700 font-bold">{{ number_format($produit->prix_ht, 2) }} €</span>
            </div>
            <div>
                <p class="max-w-lg text-xl text-zinc-400">
                    {{ $produit->description }}
                </p>
                <hr class="mt-4 mb-4">
                Choisissez votre taille
                <p class="mt-2 mb-4">

                    <select name="sizes" id="size-choice" class="w-full h-10 border border-double border-slate-300 rounded-md hover:border-cyan-600">
                        <option value="sx">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                    </select>

                    <button type="submit" class="flex justify-center pt-2 gap-2 mt-2 w-full h-10 bg-yellow-200 rounded-md hover:bg-yellow-400 text-green-900">
                        <span class="font-bold text-blue-600 hover:text-black">Ajouter au Panier</span>
                        <svg class="fill-blue-600 hover:fill-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.975 8l.025-.5c0-.517-.066-1.018-.181-1.5h5.993l-.564 2h-5.273zm-2.475 10c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm11.305-15l-3.432 12h-10.428l-.455-1.083c-.324.049-.652.083-.99.083-.407 0-.805-.042-1.191-.114l1.306 3.114h13.239l3.474-12h1.929l.743-2h-4.195zm-6.305 15c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm-9-15c-2.486 0-4.5 2.015-4.5 4.5s2.014 4.5 4.5 4.5c2.484 0 4.5-2.015 4.5-4.5s-2.016-4.5-4.5-4.5zm-.469 6.484l-1.687-1.636.695-.697.992.94 2.115-2.169.697.696-2.812 2.866z"/></svg>
                    </button>

                </p>
            </div>
        </div>
    </section>

    <section>
        <h4 class="mt-14 mx-28 text-2xl mb-3">Vous aimerez aussi :</h4>
        <div class="mx-14 mb-14 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

            {{-- @foreach ($produits as $produit) --}}
                <div class="max-w-sm border border-double shadow-lg rounded-lg bg-white">
                    <img src="{{ asset('img/' . $produit->photo_principale) }}" alt="{{ $produit->nom }}" class="rounded-t-lg">
                    <div class="mt-4 px-4">
                        <h5 class="text-xl text-gray-600 font-bold">Style Pack</h5>
                        <span>{{ $produit->description }}</span><br>
                        {{-- <span class="text-md text-cyan-700 font-bold hover:text-blue-700"><a href="{{ route('voir_produit_par_categorie', $produit->category->id) }}">{{ $produit->category->nom }}</a></span><br> --}}
                        <div class="mt-3 flex justify-between mb-3">
                            <span class="text-lg text-blue-700 font-bold">{{ number_format($produit->prix_ht, 2) }} €</span>
                            <a href="{{ route('voir_produit', $produit->id) }}" target="_blank" class="bg-yellow-400 hover:bg-cyan-700 rounded-md px-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 24">
                                    <path
                                        d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}

        </div>
    </section>
@endsection
