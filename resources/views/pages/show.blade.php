@extends('layouts.app1')
@section('contenu')

<link rel="stylesheet" href="{{ asset('css/produit.css') }}">

<div class="main-wrapper">
  <div class="container">
    <div class="product-div">
      <div class="product-div-left">
        <div class="img-container">
          <img src="{{ asset('images/'.$product->photo) }}" height="400px" alt="{{ $product->name }}">
        </div>
      </div>
                   
      <div class="product-div-right">
        <span class="product-name">{{ $product->name }}</span>
        <span class="product-price">{{ $product->prix }}DA</span>
        <div class="product-rating">
          <span></span>
        </div>
        <p class="product-description">{{ $product->description }}.</p>
        <div class="btn-groups">
          <button type="button" class="add-cart-btn" id="add_cart_btn" data-id="{{ $product->id }}" data-price="{{ $product->prix }}">ajouter au panier</button>
        </div>
        
      </div>
    </div>
  </div>
</div>

<script>
const addCartBtn = document.getElementById('add_cart_btn');
  
  addCartBtn.addEventListener('click', function() {
    let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : {};
    const productId = this.getAttribute('data-id');
    const productPrice = this.getAttribute('data-price');
    
    if(cart.hasOwnProperty(productId)) {
      cart[productId]['quantity']++;
    } else {
      cart[productId] = {
        'quantity': 1,  
        'price': productPrice
      }
    }
    
    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Produit ajouté au panier avec succés cher client.');
  });
  
</script>

@endsection
