<div class="minicart-block">
    <div class="minicart-contain">
        <a href="javascript:void(0)" class="link-to">
            <span class="icon-qty-combine">
                <i class="icon-cart-mini biolife-icon"></i>
                <span class="qty">{{ $cartCount }}</span>
            </span>
            <span class="title">My Cart </span>
            <span class="sub-total">{{ $total }}</span>
        </a>
        <div class="cart-content">
            <div class="cart-inner">
                <ul class="products">
                    @if (!empty($products))
                        @foreach ($products as $product)
                            <li wire:key="{{ $product['id'] }}">
                                <div class="minicart-item">
                                    <div class="thumb">
                                        <a href="#"><img src="{{ $product['image'] }}" width="90"
                                                height="90" alt="{{ $product['designation'] }}"></a>
                                    </div>
                                    <div class="left-info">
                                        <div class="product-title"><a href="#"
                                                class="product-name">{{ $product['designation'] }}</a></div>
                                        <div class="price">
                                            <ins><span class="price-amount"><span
                                                        class="currencySymbol">£</span>{{ $product['prix_ht'] }}</span></ins>
                                            <del><span class="price-amount"><span
                                                        class="currencySymbol">£</span>{{ ceil($product['prix_ht'] + $product['prix_ht'] * 0.25) }}</span></del>
                                        </div>
                                        <div class="qty">
                                            <label>Qty: </label>
                                            <input min="1" style="min-width: 70px;max-width:70px;"
                                                class="form-control" type="number"
                                                wire:model="productQuantities.{{ $product['id'] }}"
                                                wire:change="updateQuantity('{{ $product['id'] }}', $event.target.value)" />
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="#" wire:click.prevent="removeProduct({{ $product['id'] }})"
                                            class="remove">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <p>Your cart is empty.</p>
                    @endif
                </ul>
                <p class="btn-control">
                    <a href="{{ route('cartPage') }}" class="btn view-cart">View Cart</a>
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
