


<!-- Dans la vue collection.show -->

<h1>{{ $collection->name }}</h1>

<div class="product-list">
  @foreach($products as $product)
    <div class="product-item">
      <img src="{{ asset('img/'.$product->photo) }}" alt="{{ $product->name }}">
      <h2>{{ $product->name }}</h2>
      <p>{{ $product->description }}</p>
      <span>{{ $product->prix }}</span>
    </div>
  @endforeach
</div>
<style>
.product-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.product-item {
  background-color: #fff;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
  text-align: center;
  width: 300px;
}

.product-item img {
  height: 200px;
  width: 100%;
  object-fit: cover;
  margin-bottom: 20px;
}

.product-item h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.product-item p {
  font-size: 16px;
  margin-bottom: 20px;
}

.product-item span {
  font-size: 20px;
  font-weight: bold;
  color: #ff69b4;
} 


</style>