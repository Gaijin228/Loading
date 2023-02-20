@extends('home')

@section('content')
    <section class="mx-14 mt-14 inline-block px-3 py-1 rounded-md text-3xl font-bold text-white bg-blue-500">
        Votre panier
    </section>
    <section class="mt-4 mx-14">
        {{-- {{dd($content)}} --}}
        <table class="table-auto w-full text-md border-2 border-collapse border-blue-500">

            <thead class="table-header-group font-bold">
                <tr class="table-row">
                    <th class="p-3 border border-blue-400 table-cell text-left">Produit</th>
                    <th class="p-3 border border-blue-400 table-cell text-left">Qte</th>
                    <th class="p-3 border border-blue-400 table-cell text-left">P.U</th>
                    <th class="p-3 border border-blue-400 table-cell text-left">Total TTC</th>
                </tr>
            </thead>

            <tbody class="table-row-group">
                @foreach ($content as $produit)
                    <tr class="table-row">
                        <td class="border border-blue-400 table-cell p-3">
                            <img class="inline-block border-2 rounded-full w-24" src="{{ asset('img/' . $produit->attributes['photo']) }}" alt="">
                            <span class="px-3 font-semibold">{{ $produit->name }}</span>
                            <p class="px-6 py-2 text-zinc-600">
                                Taille : <span class="font-bold text-lg">{{ strtoupper($produit->attributes['size']) }}</span>
                            </p>
                        </td>
                        <td class="border border-blue-400 table-cell p-3">
                            <input class="border-2 hover:border-blue-700 rounded-md p-3 w-20" type="number" value="{{ $produit->quantity }}">
                            <a href=""><i class="fas fa-sync text-blue-500"></i></a>
                        </td>
                        <td class="border border-blue-400 table-cell p-3">{{ number_format($produit->price, 2) }} €</td>
                        <td class="border border-blue-400 table-cell p-3">{{ number_format(($produit->price * $produit->quantity), 2) }} €</td>
                    </tr>
                @endforeach

                <tr class="table-row">
                    <td class="border border-blue-400 table-cell p-3"></td>
                    <td class="border border-blue-400 table-cell p-3"></td>
                    <td class="border border-blue-400 table-cell p-3">Total HT</td>
                    <td class="border border-blue-400 table-cell p-3">24.17 €</td>
                </tr>

                <tr class="table-row">
                    <td class="border border-blue-400 table-cell p-3"></td>
                    <td class="border border-blue-400 table-cell p-3"></td>
                    <td class="border border-blue-400 table-cell p-3">TVA (20%)</td>
                    <td class="border border-blue-400 table-cell p-3">4.83 €</td>
                </tr>

                <tr class="table-row">
                    <td class="border border-blue-400 table-cell p-3"></td>
                    <td class="border border-blue-400 table-cell p-3"></td>
                    <td class="border border-blue-400 table-cell p-3">Total TTC</td>
                    <td class="border border-blue-400 table-cell p-3">{{ number_format($total_ttc_panier, 2) }} €</td>
                </tr>

            </tbody>
        </table>

        <div class="mt-3 mb-14 p-1 block text-center text-lg text-gray-600 border border-black rounded-md hover:text-white hover:bg-stone-800">
            <button type="submit" class="">Commander</button>
        </div>

    </section>
@endsection
