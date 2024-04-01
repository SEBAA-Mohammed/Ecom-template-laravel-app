<?php

namespace App\Livewire;



use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = Cart::content();
    }

    public function addToCart($productData)
    {
        Cart::add($productData->id, $productData->designation, $productData->quantite, $productData->tva, $productData->image, $productData->prix_ht);
    }


    public function updateCart($rowId, $quantity)
    {
        Cart::update($rowId, $quantity);

        $this->cart = Cart::content();

        $this->emit('cartUpdated');
    }

    public function removeFromCart($rowId)
    {
        Cart::remove($rowId);

        $this->cart = Cart::content();

        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
