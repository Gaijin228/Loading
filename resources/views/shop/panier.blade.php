@extends('home')

@section('content')
    <section class="mx-14 inline px-3 py-1 rounded-md text-3xl font-bold text-white bg-blue-500">Votre panier</section>
    <section class="mt-4 mx-14">

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

                <tr class="table-row">
                    <td class="border border-blue-400 table-cell p-3">
                        <img class="inline-block border-2 rounded-full w-24" src="../dist/img/10.jpg" alt="">
                        <span class="px-3">Proud marine wife</span>
                    </td>
                    <td class="border border-blue-400 table-cell p-3">
                        <input class="border-2 hover:border-blue-700 rounded-md p-3 w-20" type="number" name="quantité" id="qte" value="1">
                        <a href=""><i class="fas fa-sync"></i></a>
                    </td>
                    <td class="border border-blue-400 table-cell p-3">29.00 €</td>
                    <td class="border border-blue-400 table-cell p-3">29.00 €</td>
                </tr>

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
                    <td class="border border-blue-400 table-cell p-3">29.00 €</td>
                </tr>

            </tbody>
        </table>

        <div class="mt-3 mb-14 p-1 block text-center text-lg text-gray-600 border border-black rounded-md hover:text-white hover:bg-stone-800">
            <button type="submit" class="">Commander</button>
        </div>

    </section>
@endsection
