<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class CartController extends Controller
{
    // public function store(Request $request)
    // {
    //     $product = Produit::findOrFail($request->input('id'));
    //     $quantite = 1;
    //     Cart::add($product->id, $product->designation, $quantite, $product->prix_ht);
    //     return redirect('/')->with('added');
    // }
}
