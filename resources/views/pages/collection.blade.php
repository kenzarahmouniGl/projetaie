<h1>Produits de la collection "{{ $collection->name }}"</h1>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }}</li>
    @endforeach
</ul>
