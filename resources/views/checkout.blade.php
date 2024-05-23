@extends('layouts.app')
@section('content')
    <!-- Main content -->
    <div id="main-content" class="main-content">
        @php
            // $products = session('products');
            $products = [
                [
                    'prix_ht' => 120,
                    'image' => 'https://fakestoreapi.com/img/61pHAEJ4NML._AC_UX679_.jpg',
                    'designation' => 'xhi haja',
                    'qte' => 1,
                ],
            ];
            $total = 0;
            if ($products) {
                foreach ($products as $product) {
                    $total += $product['prix_ht'] * $product['qte'];
                }
            }
        @endphp
        <div class="container sm-margin-top-37px">
            <div class="row">

                <!--Order Summary-->
                <div
                    class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                    <div class="order-summary sm-margin-bottom-80px">
                        <div class="title-block">
                            <h3 class="title">Order Summary</h3>
                            {{-- <a href="#" class="link-forward">Edit cart</a> --}}
                        </div>
                        <div class="cart-list-box short-type">
                            @if ($products)
                                <span class="number">{{ count($products) }} items</span>
                                <ul class="cart-list">
                                    @foreach ($products as $produit)
                                        <li class="cart-elem">
                                            <div class="cart-item">
                                                <div class="product-thumb">
                                                    <a class="prd-thumb" href="#">
                                                        <figure><img src="{{ $produit['image'] }}" width="113"
                                                                height="113" alt="shop-cart"></figure>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <span class="txt-quantity">{{ $produit['qte'] }}</span>
                                                    <a href="#" class="pr-name">{{ $produit['designation'] }}</a>
                                                </div>
                                                <div class="price price-contain">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">£</span>{{ $produit['prix_ht'] }}</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">£</span>{{ ceil($produit['prix_ht'] + $produit['prix_ht'] * 0.25) }}</span></del>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <ul class="subtotal">
                                    <li>
                                        <div class="subtotal-line">
                                            <b class="stt-name">Total:</b>
                                            <span class="stt-price">{{ $total }} $ </span>
                                        </div>
                                    </li>
                                </ul>
                            @else
                                <span class="number">No items in your cart</span>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
