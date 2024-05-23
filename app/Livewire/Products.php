<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Produit;

class Products extends Component
{
    public $products;
    public $addedProductId;
    public $addedProductName;

    public function mount()
    {
        $this->products = Produit::all();
    }

    public function addToCart($productId)
    {
        return;
        //     $product = Produit::findOrFail($productId);

        //     Cart::add([
        //         'id' => $product->id,
        //         'name' => $product->designation,
        //         'qty' => 1,
        //         'price' => $product->prix_ht,
        //         'image' => $product->image,
        //     ]);
    }

    public function render(Request $request)
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

        $produits->appends($request->only(['price', 'sort']));

        return view('livewire.products', [
            'produits' => $produits
        ]);
    }
}
