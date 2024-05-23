<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Cart extends Component
{
    public $cartCount = 0;
    public $products = [];
    public $total = 0;
    public $productQuantities = [];

    protected $listeners = ['productAddedToCart' => 'updateCart'];

    public function mount()
    {
        $this->products = Session::get('products', []);
        $this->initializeQuantities();
        $this->calculateCartDetails();
    }

    public function initializeQuantities()
    {
        foreach ($this->products as $product) {
            $this->productQuantities[$product['id']] = $product['quantity'] ?? 1;
        }
    }

    public function updateCart($products)
    {
        $this->products = $products;
        $this->initializeQuantities();
        $this->calculateCartDetails();
    }

    public function removeProduct($id)
    {
        $products = Session::get('products', []);
        foreach ($products as $key => $product) {
            if ($product['id'] == $id) {
                unset($products[$key]);
                $products = array_values($products);
                Session::put('products', $products);
                $this->products = $products;
                $this->calculateCartDetails();
                break;
            }
        }
    }

    public function updateQuantity($id, $quantity)
    {
        $quantity = (int) $quantity;
        $products = Session::get('products', []);
        foreach ($products as &$product) {
            if ($product['id'] == $id) {
                $product['quantity'] = $quantity;
                $product['total_price'] = $product['price'] * $quantity;
                Session::put('products', $products);
                break;
            }
        }
        $this->products = $products;
        $this->productQuantities[$id] = $quantity;
        $this->calculateCartDetails();
    }

    public function calculateCartDetails()
    {
        $this->cartCount = count($this->products);
        $this->total = array_sum(array_map(function ($product) {
            return $product['total_price'];
        }, $this->products));
    }

    public function render()
    {
        return view('livewire.cart', ['products' => $this->products]);
        // return view(
        //     'livewire.cart',
        // [
        //     'cartCount' => $this->cartCount,
        //     'products' => $this->products,
        //     'total' => $this->total
        // ]
        // );
    }
}
