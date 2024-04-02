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
        Cart::add(['id' => $productData['id'], 'designation' =>  $productData['designation'], 'quantite' =>  $productData['quantite'], 'tva' =>  $productData['tva'], 'image' =>  $productData['image'], 'prix_ht' =>  $productData['prix_ht']]);

        $this->cart = Cart::content();

        $this->emit('cartUpdated');
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
