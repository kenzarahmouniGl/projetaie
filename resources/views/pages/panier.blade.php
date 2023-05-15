

@extends('layouts.app1')
@section('contenu')
<link rel="stylesheet" href="{{ asset('css/panier.css') }}">
@section('contenu')
<div class="container flex">
    <div class="structure">
      
  
      <table id="table">
        <thead>
          <tr>
            <th>Nom de l'article</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            
            <th>Prix total</th>
          </tr>
        </thead>
        <tbody id="all_products"></tbody>
        <tfoot>
          <tr>
            <td><button type="button" id="add_button">Acheter maintenant</button></td>
          </tr>
        </tfoot>
      </table>
      <h2>Total : <span id="total_display">0 Da</span></h2>
    </div>
  </div>
  
  <script>
    const allProducts = document.getElementById('all_products');
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    const addBtn = document.getElementById('add_button');
    const totalDisplay = document.getElementById('total_display');
  
    function updateCart() {
      allProducts.innerHTML = '';
  
      let total = 0;
      for (let productId in cart) {
        const product = getProductById(productId);
        const quantity = cart[productId]['quantity'];
        const price = cart[productId]['price'];
        const subtotal = quantity * price;
        total += subtotal;
  
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td class="article--name">
            <div style="margin-right:1rem"><img src="${product.image}"></div>
           
          </td>
          <td class="quantity">
            <button class="qty-minus" data-id="${productId}">-</button>
            <input type="text" readonly placeholder="Unit price" class="qty" value="${quantity}">
            <button class="qty-plus" data-id="${productId}">+</button>
          </td>
          <td class="price">${price} da</td>
          <td class="subtotal">${subtotal} da</td>
        `;
  
        allProducts.appendChild(tr);
      }
  
      totalDisplay.textContent = `${total} da`;
    }
  
    function getProductById(productId) {
      // Récupérer le produit par son ID depuis le serveur ou localStorage
      return {
        id: productId,
        name: 'Nom du produit',
        image: 'images/. $product->photo',
        prix: 15000,
      };
    }
  
    function saveCart() {
      localStorage.setItem('cart', JSON.stringify(cart));
    }
  
    updateCart();
  
    allProducts.addEventListener('click', function(event) {
      const productId = event.target.getAttribute('data-id');
      const product = cart[productId];
      const quantity = product.quantity;
  
      if (event.target.classList.contains('qty-minus')) {
        if (quantity === 1) {
          delete cart[productId];
        } else {
          cart[productId].quantity--;
        }
      } else if (event.target.classList.contains('qty-plus')) {
        cart[productId].quantity++;
      } else if (event.target.classList.contains('remove')) {
        delete cart[productId];
      }
  
      saveCart();
      updateCart();
    });
  
    addBtn.addEventListener('click', function() {
      // Ajouter le code pour passer la commande
      alert('La commande a été passée avec succés cher client.');
      localStorage.removeItem('cart');
      updateCart();
    });
  </script>
  @endsection