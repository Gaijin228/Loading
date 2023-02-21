<?php

namespace App\Http\Controllers\Shop;


use Cart;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Darryldecode\Cart\CartCondition;

class CartController extends Controller
{
    // Ajouter un produit au panier

    public function add(Request $request)
    {
        $produit = Produit::find($request->id);

        Cart::add(array(
            'id' => $produit->id,
            'name' => $produit->nom,
            'price' => $produit->prix_ht,
            'quantity' => $request->qty,
            'attributes' => array('size' => $request->size, 'photo' => $produit->photo_principale, 'prix_ttc' => $produit->prixTTC())
        ));

        return redirect(route('cart_index'));
    }

    public function index()
    {

        $content = Cart::getContent();
        // dd($content);

        // add single condition on a cart bases

        $condition = new CartCondition(array(
            'name' => 'VAT 20%',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '20%',
        ));

        Cart::condition($condition);

        $total_ht_panier = Cart::getSubTotal();
        $total_ttc_panier = Cart::getTotal();
        $tva = $total_ttc_panier - $total_ht_panier;

        return view('cart.panier', compact('content', 'total_ttc_panier', 'total_ht_panier', 'tva'));
    }
}
