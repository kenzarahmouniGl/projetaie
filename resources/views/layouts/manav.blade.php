@vite(['resources/css/app.css', 'resources/js/app.js'])
  <div class="header-wrapper">
    <div class="logo">
      <a href="#">
        <img src="{{ asset('img/logotransparentreduit.png') }}" alt="Logo">
       
      </a>
    </div>
    <form  class="ch" action="{{ route('search') }}" method="GET">
      <input type="text" name="q" placeholder="Rechercher des produits...">
      <button type="submit">Rechercher</button>
  </form>
  
   
     
    <nav class="nav-bar">
      
      
      <ul>
        <li><a href="{{ URL::to('/') }}">Accueil </a></li>
        <li class="collection">
          <a href="#">Collections
            <ul class="sub-menu">
           
              <li><a href="{{ URL::to('/boucle') }}">Boucles d'oreilles - Thamenguct</a></li><br>
              <li><a href="{{ URL::to('/bague') }}">LLes Bagues - Thaxathemth</a></li><br>
              <li><a href="{{ URL::to('/parure') }}">Les Parures</a></li><br>
              <li><a href="{{ URL::to('/broche') }}">Les Broches - Avzim</a></li><br>
              <li><a href="{{ URL::to('/bracelet') }}">Les Bracelets - Ameclux</a></li><br>
              <li><a href="{{ URL::to('/diadèmes') }}">Les Diadèmes - Taessavt</a></li><br>
              <li><a href="{{ URL::to('/colier') }}">Les Colliers - Azrar</a></li><br>

            </ul>
          </a>
        </li>
       
        
        <li><a href="{{ route('panier.store') }}">Panier</a>
        </li>
        <li class="collection">
          <a href="#">Contacts
            <ul class="sub-menu">
           
              <li><a href="">Gemnovia@gmail.com</a></li><br>
              <li><a href="">facebook</a></li><br>
            </ul>
          </a>
          
         </li>
        @if (Route::has('login'))
        
          
        @auth
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
     
            @else
                <a href="{{ route('login') }}"> Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">/Register</a>
                @endif
            @endauth
       
    @endif



      </ul>
    </nav>
    <button class="c">&#9776;</button>
    <div class="sidebar">
      
      <ul>
        <li><a href="{{ URL::to('/') }}">Accueil </a></li>
        <li class="collection">
          <a href="#">Collections
            <ul class="sub-menu">
           
              <li><a href="{{ URL::to('/boucle') }}">Boucles d'oreilles - Thamenguct</a></li><br>
              <li><a href="{{ URL::to('/bague') }}">LLes Bagues - Thaxathemth</a></li><br>
              <li><a href="{{ URL::to('/parure') }}">Les Parures</a></li><br>
              <li><a href="{{ URL::to('/broche') }}">Les Broches - Avzim</a></li><br>
              <li><a href="{{ URL::to('/bracelet') }}">Les Bracelets - Ameclux</a></li><br>
              <li><a href="{{ URL::to('/diadèmes') }}">Les Diadèmes - Taessavt</a></li><br>

            </ul>
          </a>
        </li>
       
        
        <li><a href="{{ route('panier.store') }}">Panier</a>
        </li>
        <li class="collection">
          <a href="#">Contacts
            <ul class="sub-menu">
           
              <li><a href="">Gemnovia@gmail.com</a></li><br>
              <li><a href="">facebook</a></li><br>
            </ul>
          </a>
          
         </li>
        @if (Route::has('login'))
        
          
        @auth
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
     
            @else
                <a href="{{ route('login') }}"> Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">/Register</a>
                @endif
            @endauth
       
    @endif



      </ul>
    </nav>
      
   
    </div>
  </div>
