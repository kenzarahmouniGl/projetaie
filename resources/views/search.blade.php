
    
    @extends('layouts.app1')
    @section('contenu')
  
   

    @if(count($product) > 0)
        <ul>
            <div class="Nouveauté">
                <h1>Résultats de la recherche pour {{ $searchTerm }}</h1>
                <div class="produits">
                  @foreach ($product as $products)   
                  <div class="box3">
                    <a href="{{ url('/profil/' . $products->id) }}" title="queliquer pour plus d'informations"><img src="{{ asset('images/'. $products->photo) }}" alt="{{ $products->name }}"></a>
                    <div class="card-header">
                     <h4 class="title">{{ $products->name }}</h4>
                     <h4 class="price">{{ $products->prix }}
                     </h4>
                    </div>
                  </div>  @endforeach                                                                       
                </div>                 
                </div>
        </ul>
    @else
        <p>Aucun produit trouvé pour cette recherche.</p>
    @endif
    @endsection

    