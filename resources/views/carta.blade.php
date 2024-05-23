<div>
    @php
        $products = session('products');

        dump($products);
    @endphp

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->designation }}</li>
            <li>{{ $product->prix_ht }}</li>
        @endforeach
    </ul>
</div>
