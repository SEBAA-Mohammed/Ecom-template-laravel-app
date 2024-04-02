<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product = Produit::findOrFail($request->input('id'));
        $quantite = 1;
        Cart::add($product->id, $product->designation, $quantite, $product->prix_ht);
        return redirect('/')->with('added');
    }
}
