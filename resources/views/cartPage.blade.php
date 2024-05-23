@extends('layouts.app')
@section('content')
    <div class="page-contain shopping-cart">
        @php
            $products = session('products');
        @endphp

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <!--Top banner-->
                <div class="top-banner background-top-banner-for-shopping min-height-346px">
                    <h3 class="title">Save $50!*</h3>
                    <p class="subtitle">Save $50 when you open an account online & spen $50 on your first online purchase to
                        day</p>
                    <ul class="list">
                        <li>
                            <div class="price-less">
                                <span class="desc">Purchase amount</span>
                                <span class="cost">$0.00</span>
                            </div>
                        </li>
                        <li>
                            <div class="price-less">
                                <span class="desc">Credit on billing statement</span>
                                <span class="cost">$0.00</span>
                            </div>
                        </li>
                        <li>
                            <div class="price-less sum">
                                <span class="desc">Cost affter statemen credit</span>
                                <span class="cost">$0.00</span>
                            </div>
                        </li>
                    </ul>
                    <p class="btns">
                        <a href="#" class="btn">Open Account</a>
                        <a href="#" class="btn">Learn more</a>
                    </p>
                </div>

                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Your cart items</h3>
                            <form class="shopping-cart-form" action="#" method="post">
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($products)
                                            @foreach ($products as $produit)
                                                <tr class="cart_item">
                                                    <td class="product-thumbnail" data-title="Product Name">
                                                        <a class="prd-thumb" href="#">
                                                            <figure><img width="113" height="113"
                                                                    src="{{ $produit['image'] }}" alt="shipping cart">
                                                            </figure>
                                                        </a>
                                                        <a class="prd-name" href="#">{{ $produit['designation'] }}</a>
                                                        {{-- <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o"
                                                                    aria-hidden="true"></i></a>
                                                        </div> --}}
                                                    </td>
                                                    <td class="product-price" data-title="Price">
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount"><span
                                                                        class="currencySymbol">£</span>{{ $produit['prix_ht'] }}</span></ins>
                                                            <del><span class="price-amount"><span
                                                                        class="currencySymbol">£</span>{{ ceil($produit['prix_ht'] + $produit['prix_ht'] * 0.25) }}</span></del>
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity-box type1">
                                                            <div class="qty-input">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $produit['quantity'] }}"
                                                                    wire:model="productQuantities.{{ $produit['id'] }}"
                                                                    wire:change="updateQuantity('{{ $produit['id'] }}', $event.target.value)"
                                                                    data-max_value="20" data-min_value="1" data-step="1"
                                                                    readonly />
                                                                <a href="#" class="qty-btn btn-up"><i
                                                                        class="fa fa-caret-up" aria-hidden="true"></i></a>
                                                                <a href="#" class="qty-btn btn-down"><i
                                                                        class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount"><span
                                                                        class="currencySymbol">£</span>{{ $produit['prix_ht'] * $produit['quantity'] }}</span></ins>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="cart_item">
                                                <td class="product-thumbnail" data-title="Product Name">No items in your
                                                    cart</td>
                                            </tr>
                                        @endif

                                        <tr class="cart_item wrap-buttons">
                                            <td class="wrap-btn-control" colspan="4">
                                                <a class="btn back-to-shop">Back to Shop</a>
                                                <button class="btn btn-update" type="submit" disabled>update</button>
                                                <button class="btn btn-clear" type="reset">clear all</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div class="subtotal-line">
                                    <b class="stt-name">Total <span class="sub">({{ count($products) }} items)</span></b>
                                    {{-- <span class="stt-price">{{ $product['total_price'] }}$ </span> --}}
                                    <span class="stt-price">0$</span>
                                </div>
                                <div class="tax-fee">
                                    <p class="title">Est. Taxes & Fees</p>
                                    <p class="desc">Based on 56789</p>
                                </div>
                                <div class="btn-checkout">
                                    <a href="#" class="btn checkout">Check out</a>
                                </div>
                                <div class="biolife-progress-bar">
                                    <table>
                                        <tr>
                                            <td class="first-position">
                                                <span class="index">$0</span>
                                            </td>
                                            <td class="mid-position">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="last-position">
                                                <span class="index">$99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping
                                    and pickup</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
