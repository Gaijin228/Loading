<?php

namespace App\Http\Controllers\Shop;

use App\Models\Tag;
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
        // Avec Laravel debbuger on a
        // $produits = Produit::with('category')->get();
        // dd($produits);
        // $categories = Category::where('is_online', 1)->get();

        return view('shop.index', compact('produits'));
    }

    public function produit(Request $request)
    {
        // echo "page produit";

        // dd($request->id);
        $produit = Produit::find($request->id);
        $category = Category::find($request->id);

        // $categories = Category::where('is_online', 1)->get();
        return view('shop.produit', compact('produit','category'));
    }

    public function viewByCategory(Request $request)
    {
        //Récupérer toute les catégories >> in_online == 1
        // $categories = Category::where('is_online', 1)->get();
        // dd($categories);

        // SELECT * FROM produits = category_id = $request->id ?
        $produits = Produit::where('category_id', $request->id)->get();

        $category = Category::find($request->id);
        // $produits = $category->produits();


        return view('shop.categorie', compact('produits', 'category'));
    }

    public function viewByTag(Request $request)
    {
        $tag = Tag::find($request->id);
        $produits = $tag->produits;

        return view('shop.categorie', compact('produits', 'tag'));
    }

}
