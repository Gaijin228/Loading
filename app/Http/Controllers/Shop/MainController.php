<?php

namespace App\Http\Controllers\Shop;

use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // SELECT * FROM produits;
        $produits = Produit::all();
        $categories = Category::where('is_online', 1)->get();

        return view('shop.index', compact('produits', 'categories'));
    }

    public function produit(Request $request) {
        // echo "page produit";

        // dd($request->id);
        $produit = Produit::find($request->id);
        $categories = Category::where('is_online', 1)->get();

        return view('shop.produit', compact('produit', 'categories'));
    }

    public function viewByCategory() {
        //Récupérer toute les catégories >> in_online == 1
        $categories = Category::where('is_online', 1)->get();
        // dd($categories);

        return view('shop.categorie', compact('categories'));
    }
}
