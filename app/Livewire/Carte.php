<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;


use Livewire\Component;

class Carte extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = Cart::content();
    }

    public function addToCart($productData)
    {
        $productId = $productData['id'];
        $productName = $productData['designation'];
        $quantity = $productData['quantite'];
        $price = $productData['prix_ht'];

        Cart::add($productId, $productName, $quantity, $price);

        $this->cart = Cart::content();
    }





    // public function updateCart($rowId, $quantity)
    // {
    //     Cart::update($rowId, $quantity);

    //     $this->cart = Cart::content();

    //     $this->emit('cartUpdated');
    // }

    // public function removeFromCart($rowId)
    // {
    //     Cart::remove($rowId);

    //     $this->cart = Cart::content();

    //     $this->emit('cartUpdated');
    // }


    public function render()
    {
        return view('livewire.cart');
    }
}
