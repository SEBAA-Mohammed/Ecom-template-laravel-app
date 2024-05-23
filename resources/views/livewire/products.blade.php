<div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-category grid-style ">
        <div id="top-functions-area" class="top-functions-area">
            <div class="flt-item to-left group-on-mobile">
                <span class="flt-title">Refine</span>
                <a href="#" class="icon-for-mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <div class="wrap-selectors">
                    <form action="/produits" method="get">
                        <span class="title-for-mobile">Refine Products By</span>
                        <div data-title="Price:" class="selector-item">
                            <select name="price" class="selector" onchange="this.form.submit()">
                                <option value="default">Price</option>
                                <option value="5">Less than 5$</option>
                                <option value="20">Less than 20$</option>
                                <option value="100">Less than 100$</option>
                                <option value="150">Less than 150$</option>
                            </select>
                        </div>

                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button>
                        </p>
                    </form>
                </div>
            </div>
            <div class="flt-item to-right">
                <form action="/produits" method="get">
                    <span class="flt-title">Sort</span>
                    <div class="wrap-selectors">
                        <div class="selector-item orderby-selector">
                            <select name="sort" class="orderby" aria-label="Shop order"
                                onchange="this.form.submit()">
                                <option value="default" selected="selected">Default sorting</option>
                                <option value="asc">price: low to high</option>
                                <option value="desc">price: high to low</option>
                            </select>
                        </div>
                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button>
                        </p>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <ul class="products-list">
            @foreach ($produits as $produit)
                <li class="product-item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                    <div class="contain-product layout-default">
                        <div class="product-thumb">
                            <a href="#" class="link-to-product">
                                <img src="{{ $produit->image }}" alt="dd" width="270" height="270"
                                    class="product-thumnail">
                            </a>
                        </div>
                        <div class="info">
                            <b class="categories">{{ $produit->sous_famille->libelle }}</b>
                            <h4 class="product-title"><a href="#" class="pr-name">{{ $produit->designation }}</a>
                            </h4>
                            <div class="price">
                                <ins><span class="price-amount"><span
                                            class="currencySymbol">£</span>{{ $produit->prix_ht }}</span></ins>
                                <del><span class="price-amount"><span
                                            class="currencySymbol">£</span>{{ ceil($produit->prix_ht + $produit->prix_ht * 0.25) }}</span></del>
                            </div>
                            <div class="shipping-info">
                                <p class="shipping-day">3-Day Shipping</p>
                                <p class="for-today">Pree Pickup Today</p>
                            </div>
                            <div class="slide-down-box">
                                <p class="message">All products are carefully selected to ensure food
                                    safety.</p>
                                <div class="buttons">
                                    <a wire:click="addProductToCart({{ $produit->id }})" {{-- wire:click="addProductToCart({{ $produit->id }})"  --}}
                                        class="btn add-to-cart-btn">
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="biolife-panigations-block">
        <ul class="panigation-contain">
            @if ($produits->onFirstPage())
                <li><span class="link-page disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></span></li>
            @else
                <li><a href="{{ $produits->previousPageUrl() }}" class="link-page"><i class="fa fa-angle-left"
                            aria-hidden="true"></i></a></li>
            @endif

            @php
                $start = max($produits->currentPage() - 2, 1);
                $end = min($start + 3, $produits->lastPage());
            @endphp
            @if ($produits->currentPage() >= 6)
                <li><a href="{{ $produits->url(1) }}" class="link-page">1</a></li>
                @if ($produits->currentPage() > 6)
                    <li><span class="sep">....</span></li>
                @endif
            @endif
            @for ($i = $start; $i <= $end; $i++)
                <li>
                    <a href="{{ $produits->url($i) }}"
                        class="link-page @if ($i === $produits->currentPage()) current-page @endif">{{ $i }}</a>
                </li>
            @endfor

            @if ($produits->currentPage() + 2 < $produits->lastPage())
                <li><span class="sep">....</span></li>
            @endif

            @if ($produits->currentPage() + 1 < $produits->lastPage())
                <li><a href="{{ $produits->url($produits->lastPage()) }}"
                        class="link-page">{{ $produits->lastPage() }}</a></li>
            @endif

            @if ($produits->hasMorePages())
                <li><a href="{{ $produits->nextPageUrl() }}" class="link-page"><i class="fa fa-angle-right"
                            aria-hidden="true"></i></a></li>
            @else
                <li><span class="link-page disabled"><i class="fa fa-angle-right" aria-hidden="true"></i></span></li>
            @endif
        </ul>
    </div>
</div>
