
@extends('layouts.app1')
@section('contenu')
    

      <div class="Nosproduits">
        <h2 class="titreproduit">Les Bracelets - Ameclux
        </h2>
        <p>Collection de bracelets pour femme en argent massif 950 . Sublimez votre élégance avec nos bracelets intemporels, et apportez de l’originalité avec<br> nos bracelets au design typiquement kabyles de fabrication artisanale.</p>

         
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
