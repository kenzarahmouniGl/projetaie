@extends('layouts.app1')
@section('contenu')
  <!-- ... Autres balises meta et liens CSS ... -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/couverture2.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<section id="collections">
  <div class="Nosproduits">
    <h2 class="titreproduit">Des bijoux kabyles authentiques en argent</h2>
    <p>Nous proposons une gamme de bijoux kabyles en argent de fabrication artisanale,<br> créés par des artisans talentueux de la région de Kabylie. Des bijoux de qualité et durables, qui respectent un savoir-faire traditionnel ancestral.</p></div>
    <section id="collections">
     
      <div class="advertisements">
        <div class="advertisement">
          <i class="fas fa-shipping-fast"></i>
          <div class="advertisement-text">Livraison rapide</div>
        </div>
        <div class="advertisement">
          <i class="fas fa-credit-card"></i>
          <div class="advertisement-text">Paiement sécurisé</div>
        </div>
        <div class="advertisement">
          <i class="fas fa-headset"></i>
          <div class="advertisement-text">Assistance 24/7</div>
        </div>
        <div class="advertisement">
          <i class="fas fa-tags"></i>
          <div class="advertisement-text">Qualité</div>
        </div>
      </div>
    </section>
  
<section id="collections">
         
<div class="Nouveauté">
  <h1>Nos collections</h1>
  <div class="products-container">
    <div class="product">
      <a href="{{ URL::to('/login') }}">
        <img src="{{ asset('img/bouclecollections.jpg') }}" alt="Boucles d'oreilles">
        <div class="product-overlay">
          <div class="product-name">Boucles d'oreilles-Tamengucht<br></div>
        </div>
      </a>
    </div>
    <div class="product">
      <a href="{{ URL::to('/login') }}">
        <img src="{{ asset('img/parurecollections.jpg') }}" alt="Parure">
        <div class="product-overlay">
          <div class="product-name">Parure</div>
        </div>
      </a>
    </div>
  
    <div class="product">
      <a href="{{ URL::to('/login') }}">
        <img src="{{ asset('img/BAGUEE 1200 DZD.jpg') }}" alt="Bagues">
        <div class="product-overlay">
          <div class="product-name">Bagues-Taxathemt</div>
        </div>
      </a>
    </div>
    <div class="product">
      <a href="{{ URL::to('/login') }}">
        <img src="{{ asset('img/colier1.jpg') }}" alt="Colliers">
        <div class="product-overlay">
          <div class="product-name">Colliers-Azrar</div>
        </div>
      </a>
    </div>
    <div class="product">
      <a href="{{ URL::to('/login') }}">
        <img src="{{ asset('img/ame9yas1 (2).jpg') }}" alt="Bracelet">
        <div class="product-overlay">
          <div class="product-name">Les Bracelets - Ameclux</div>
        </div>
      </a>
    </div>
    <div class="product">
      <a href="{{ URL::to('/login') }}">
        <img src="{{ asset('images/Capture d’écran 2023-05-11 223438.jpg') }}" alt="Bracelet">
        <div class="product-overlay">
          <div class="product-name">Les Diadèmes - Taessavt</div>
        </div>
      </a>
    </div>
    <div class="product">
      <a href="{{ URL::to('/login') }}">
        <img src="{{ asset('images/1683843472_Capture d’écran 2023-05-11 221557.jpg') }}" alt="Bracelet">
        <div class="product-overlay">
          <div class="product-name">Les Broches - Avzim</div>
        </div>
      </a>
    </div>
  </div>
  

</section>

@endsection

<style>
  /* CSS */

/* Styles généraux */



.container {
  max-width: 1200px;
  margin: 0 auto;
  padding:0px;
}

/* Section du carrousel */
#carouselExampleSlidesOnly {
  margin-bottom: 0px;
}

/* Section des collections de produits */
.products-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.product {
  position: relative;
  margin: 20px;
  width: 250px;
  height: 200px;
  overflow: hidden;
  box-shadow: 0 0 10px rgba(34, 68, 0, 0.1);
  border-radius: 0px;
}

.product img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s;
}

.product:hover img {
  transform: scale(1.1);
}

.product-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 10px;
  background-image: linear-gradient(rgb(169, 167, 167), #b9cad1);
  color: #fff;
  opacity: 0;
  transition: opacity 0.3s;
}

.product:hover .product-overlay {
  opacity: 1;
}

.product-name {
  font-weight: bold;
}

.product-overlay a {
  color: #fff;
  text-decoration: none;
}

/* CSS */
/* CSS */

.advertisements {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  justify-items: center;
  margin-top: 30px;
}

.advertisement {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.advertisement i {
  font-size: 40px;
  margin-bottom: 10px;
}

.advertisement-text {
  font-size: 14px;
  text-align: center;
}


</style>