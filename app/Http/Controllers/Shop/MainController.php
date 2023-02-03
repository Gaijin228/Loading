<?php

namespace App\Http\Controllers\Shop;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // SELECT * FROM produits;
        $produits = Produit::all();

        return view('shop.index', compact('produits'));
    }

    public function produit() {
        // echo "page produit";

        return view('shop.produit');
    }
}
