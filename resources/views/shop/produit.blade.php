@extends('shop')

@section('content')
    <!-- Afficher un produit uniquement -->
    <section class="p-4 md:flex md:justify-center gap-8 bg-gray-100">
        <div class="">
            <div class="max-w-lg max-h-md border border-double shadow-lg rounded-lg bg-white">
                <img src="../dist/img/10.jpg" alt="10" class="rounded-t-lg">
            </div>
        </div>
        <div>
            <h5 class="text-3xl text-gray-600">PROUD MARINE WIFE</h5>
            <div class="mt-3 flex justify-between mb-3">
                <span class="text-lg text-blue-700 font-bold">29.00 €</span>
            </div>
            <div>
                <p class="max-w-lg text-xl text-zinc-400">
                    Cinoque aime choco! consectetur adipisicing elit. Dignissimos dolore eaque earum eos ex, exercitationem facilis magni maiores maxime natus neque odit quo quod recusandae tempora unde ut veritatis vero!
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
@endsection
