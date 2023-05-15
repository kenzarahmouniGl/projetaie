

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
 
<div class="card">
  <div class="card-header">Modifier Produit</div>
  <div class="card-body">
      
      <form action="{{ url('/collection/'.$collection->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" value="{{$collection->name}}"name="name" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" id="photo" value="{{$collection->photo}}"name="photo">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" value="{{$collection->description}}"required></textarea>
        </div>
      
       
        <input type="submit" value="update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
<style>
    /* Aligner le formulaire au centre de la page */
    form {
        background-color: rgb(193, 18, 18)
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 50px;
    }
    
    /* Styliser les champs du formulaire */
    input[type="text"],
    input[type="number"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 20px;
    }
    
    /* Styliser le bouton de soumission */
    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    button[type="submit"]:hover {
      background-color: #45a049;
    }
    
    /* Styliser les messages d'erreur de validation */
    .error {
      color: #f44336;
      font-size: 12px;
      margin-bottom: 10px;
    }
    
    /* Styliser l'aperçu de la photo */
    img {
      max-width: 100%;
      margin-bottom: 20px;
    }
    /* Styliser l'élément d'entrée de fichier */
    input[type="file"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 20px;
      background-color: #fff;
      color: #333;
      font-size: 14px;
    }
    
    input[type="file"]:hover {
      background-color: #f5f5f5;
    }
    
    input[type="file"]:focus {
      outline: none;
      box-shadow: 0px 0px 5px #aaa;
    }
    
    input[type="file"]::-webkit-file-upload-button {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      padding: 12px 20px;
      cursor: pointer;
    }
    
    input[type="file"]::-webkit-file-upload-button:hover {
      background-color: #45a049;
    }
    
      </style>
