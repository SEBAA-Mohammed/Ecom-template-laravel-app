<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Produit::query()->with('sous_famille', 'unite', 'marque');

        if ($request->has('price')) {
            $query->where('prix_ht', '<=', $request->input('price'));
        }

        if ($request->has('sort')) {
            $sortOrder = $request->input('sort');
            $query->orderBy('prix_ht', $sortOrder);
        }

        $produits = $query->paginate(12);

        // Append the query parameters to the pagination links
        $produits->appends($request->only(['price', 'sort']));

        return view('produits', compact('produits'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
