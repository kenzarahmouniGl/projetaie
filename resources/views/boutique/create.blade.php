

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
            <nav>
               
               
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                    </div>
                </form>

                <a href="#" class="notification">

                </a>
               
               
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
                </a>
            </nav>
            <!-- NAVBAR -->
  
               
            
  
  <div class="card">
  
  <div class="card-body">
      
      <form action="{{ url('boutique') }}" method="post">
        {!! csrf_field() !!}
  
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
            </div>
      
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>
           
         
            <button type="submit" class="btn btn-primary">Create</button>
        
        
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
  
  boutique