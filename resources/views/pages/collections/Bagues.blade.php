
@extends('layouts.app1')
@section('contenu')
    

      <div class="Nosproduits">
        <h2 class="titreproduit">Les Bagues - Thaxathemth
        </h2>
        <p>Collection de bagues kabyles pour femme en argent. Afin de satisfaire votre imagination et vos envies, découvrez notre collection de bagues travaillées en argent<br> massif, émaux et corail rouge de méditerranée. Pour un style tendance, chic, contemporain et élégant, offrez à vos mains l’art et la créativité des artisans kabyles.</p>

         
<div class="Nouveauté">

<div class="produits">

    <div class="Nouveauté">
        <h1>Nos Bagues</h1>
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
