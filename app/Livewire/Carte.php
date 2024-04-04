<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;
use Livewire\Component;

class Carte extends Component
{
    public $cartCount;
    public $products;
    public $total;
    public $productQuantities = [];


    #[On('cart-updated')]
    public function mount()
    {
        $this->cartCount = Cart::count();
        $this->products = Cart::content();
        $this->total = Cart::total();

        $this->productQuantities = $this->getProductQuantities();
    }



    private function getProductQuantities()
    {
        $quantities = [];
        foreach ($this->products as $product) {
            $quantities[$product->id] = $product->quantity;
        }
        return $quantities;
    }




    public function removeCart($id)
    {
        Cart::remove($id);

        $this->cartCount = Cart::getContent()->count();
        $this->products = Cart::getContent();
        $this->total = Cart::getTotal();

        $this->dispatch('cart-updated');
    }



    // public function clearAllCart()
    // {
    //     Cart::clear();


    //     $this->dispatch('swal', ['Votre panier est vide !']);


    //     $this->cartCount = Cart::getContent()->count();
    //     $this->products = Cart::getContent();
    //     $this->total = Cart::getTotal();

    //     $this->dispatch('cart-updated');
    // }

    public function updateQuantity($rowId, $quantity)
    {
        Cart::update($rowId, $quantity);

        $this->mount();

        $this->dispatch('cart-updated');
    }

    public function render()
    {
        return view('livewire.cart', [
            'cartCount' => $this->cartCount,
            'products' => $this->products,
            'total' => $this->total
        ]);
    }
}
