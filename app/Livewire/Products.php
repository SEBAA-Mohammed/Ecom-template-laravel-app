<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Produit;

class Products extends Component
{
    public $products;
    public $addedProductId;
    public $addedProductName;

    public function mount()
    {
        $this->products = Session::get('products', []);
    }

    public function addProductToCart($id)
    {
        $product = Produit::findOrFail($id);
        $products = Session::get('products', []);
        $products[] = $product;
        Session::put('products', $products);
        $this->products = $products;

        $this->dispatch('productAddedToCart', $products);
    }

    public function updateQuantity($index, $quantity)
    {
        $products = Session::get('products', []);
        if (isset($products[$index])) {
            $products[$index]['quantity'] = $quantity;
            $products[$index]['total_price'] = $products[$index]['price'] * $quantity;
            Session::put('products', $products);
            $this->products = $products;
        }
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
