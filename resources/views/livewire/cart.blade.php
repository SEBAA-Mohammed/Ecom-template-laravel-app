<div class="minicart-block">
    <div class="minicart-contain">
        <a href="javascript:void(0)" class="link-to">
            <span class="icon-qty-combine">
                <i class="icon-cart-mini biolife-icon"></i>
                <span class="qty">{{ $cart->count() }}</span>
            </span>
            <span class="title">My Cart </span>
            <span class="sub-total">${{ Cart::total() }}</span>
        </a>
        <div class="cart-content">
            <div class="cart-inner">
                <ul class="products">
                    @if ($cart->isNotEmpty())
                        @foreach ($cart as $item)
                            <li>
                                <div class="minicart-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ $item->image }}" width="90" height="90"
                                                alt="National Fresh"></a>
                                    </div>
                                    <div class="left-info">
                                        <div class="product-title"><a href="#"
                                                class="product-name">{{ $item->designation }}</a></div>
                                        <div class="price">
                                            <ins><span class="price-amount"><span
                                                        class="currencySymbol">£</span>{{ $item->prix_ht }}</span></ins>
                                            <del><span class="price-amount"><span
                                                        class="currencySymbol">£</span>{{ ceil($item->prix_ht + $item->prix_ht * 0.25) }}</span></del>
                                        </div>
                                        <div class="qty">
                                            <label>Qty: {{ $item->quantite }} </label>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a wire:click="updateCart({{ [$item->id, $item->quantite] }})" class="edit"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="#" class="remove"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <p>Your cart is empty.</p>
                    @endif
                </ul>
                <p class="btn-control">
                    <a href="#" class="btn view-cart">View Cart</a>
                    @auth
                        <a href="{{ route('checkout') }}" class="btn">Checkout</a>
                    @else
                        <span class="disabled-link">Checkout</span>
                    @endauth
                </p>

            </div>
        </div>
    </div>
</div>
