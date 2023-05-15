
@extends('layouts.app1')
@section('contenu')
    

      <div class="Nosproduits">
        <h2 class="titreproduit">Boucles d'oreilles - Thamenguct
        </h2>
        <p>Collection de boucles d’oreilles pour femme en argent massif 950<br> nos boucles d’oreilles sont les incontournables qui vous aideront à révéler votre beauté.</p>

         
<div class="Nouveauté">
<h1>Les Nouveautés</h1>
<div class="produits">

    <div class="Nouveauté">
        <h1>Nos Coliers</h1>
        <div class="produits">
            @foreach ($product as $products)
         <div class="box3">
        
          <a href="{{ url('/profil/' . $products->id) }}" title="queliquer pour plus d'informations"><img src="{{ asset('images/'. $products->photo) }}" alt="{{ $products->name }}"></a>
        <div class="card-header">
            <h4 class="title">{{ $products->name }}</h4>
            <h4 class="price">{{ $products->prix }}
            </h4>
        </div>
      </div>  @endforeach    {{--$product->links()--}}                                                                        
    </div>                 
    </div>
</div></div>
 {{--$product->links()--}}                                                                        



@endsection    
