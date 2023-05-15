

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href={{asset('css/admin.css')}}>

    <body>
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
      @endif
    
        <!-- SIDEBAR -->
        <section id="sidebar">
            <a href="#" class="brand">
                <i class='bx bxs-smile'></i>
                <span class="text">la page Fournisseur</span>
            </a>
            <ul class="side-menu top">
                
                
             
             
                <li>
                    <a href="{{ url('/boutique') }}">
                        
                        <span class="text"> Listes boutiques</span>
                    </a>
                  
                </li>
                <li>
                    <a href="{{ url('/collection') }}">
                        
                        <span class="text">Liste collection</span>
                    </a>
                  
                </li>
                <li>
                    <a href="{{ url('/produit/create') }}">
                        
                        <span class="text">Ajouter produit</span>
                    </a>
                  
                </li>
                <li>
                    <a href="{{ url('/boutique/create') }}">
                        
                        <span class="text"> Ajouter boutiques</span>
                    </a>
                  
                </li>
                <li>
                    <a href="{{ url('/collection/create') }}">
                        
                        <span class="text">Ajouter collection</span>
                    </a>
                  
                </li>
                <li>
                    <a href="#">
                        
                        <span class="text">Commandes</span>
                    </a>
                </li>
               
                <li>
                    <a href="#">
                        
                        <span class="text">Message</span>
                    </a>
                </li>
           
            </ul>
         
        </section>
        <!-- SIDEBAR -->
    
    
    
        <!-- CONTENT -->
        <section id="content">
            <!-- NAVBAR -->
  
  
               
            
       
            








           
        
    
        <script src="script.js"></script>
<div class="container">
    
    <table class="table">
        <thead>
            <tr>
                
                <th>Nom</th>
                <th>Photo</th>
                <th>Prix</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
          
            @foreach ($product as $products)
            <tr>
                <td>{{ $products->name }}</td>
                <td>{{ $products->photo }}</td>
                <td>{{ $products->prix}}</td>
          
                <td>
                    <a href="{{ url('/produit/' . $products->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <a href="{{ url('/produit/' . $products->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    <form method="POST" action="{{ url('/produit' . '/' . $products->id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                   
                </td>
                
            </tr>
             
        @endforeach
        
        
        
        </tbody>
    </table>
</div>

