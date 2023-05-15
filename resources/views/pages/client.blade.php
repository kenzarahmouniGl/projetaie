
@extends('layouts.app1')
@section('contenu')
  <!-- ... Autres balises meta et liens CSS ... -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


<!--ici c la photo de publicité-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      
      <img src= "{{ asset('img/couverture2.jpg') }}"class="d-block w-100" alt="...">
    
    </div>
  </div>

</div>
<!--ici on fait la publicité des icons -->
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
       <!--ici on affiche les produits-->
<div class="Nouveauté">
<h1>Les Nouveautés</h1>
<div class="produits">
  @foreach ($product as $products)   
  <div class="box3">
    <a href="{{ url('/profil/' . $products->id) }}" title="queliquer pour plus d'informations"><img src="{{ asset('images/'. $products->photo) }}" alt="{{ $products->name }}"></a>
    <div class="card-header">
     <h4 class="title">{{ $products->name }}</h4>
     <h4 class="price">{{ $products->prix }}DA
     </h4>
    </div>
  </div>  @endforeach                                                                       
</div>                 
</div>
<!-- Afficher la pagination -->
<!-- Afficher la pagination -->
<div class="pagination text-center">
  {{ $product->links('pagination::bootstrap-4') }}
</div>
<!--Code css pour la pagination-->
<style>
.pagination {
  display: flex;
  justify-content: center;
}

.pagination > .page-item > .page-link {
  color: #333;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 0;
  margin: 0 2px;
}

.pagination > .page-item > .page-link:hover {
  color: #fff;
  background-color: #f9fefe;
  border-color: #f9fefe;
}

.pagination > .page-item.active > .page-link {
  color: #fff;
  background-color: #000000;
  border-color: #000000;
}


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

@endsection    
