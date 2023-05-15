

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   
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
                <span class="text">la page admin</span>
            </a>
            <ul class="side-menu top">
                
                
             
                <li>
                    <a href="{{ url('users') }}">


                        <span class="text">Modifier utilisateurs</span></a>
                    </a>
                </li>
                <li>
                    <a href="{{ url('users') }}">


                        <span class="text">Modifier utilisateurs</span></a>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="text">Ajouter collection</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        
                        <span class="text">Messssage</span>
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
  
               
            
       
            








           
        
    
        <script src="script.js"></script>