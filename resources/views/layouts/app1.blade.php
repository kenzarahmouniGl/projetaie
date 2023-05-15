<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gymonivia</title>
  <link rel="icon" href= "{{ asset('img/logotransparentreduit.png') }}" alt="logo">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src={{asset('js/index.js')}}></script>
  <box-icon name='menu-alt-right'></box-icon>
  <link rel="stylesheet" href={{asset('css/home.css')}}>
 
</head>
<body>
 
  <header>
        
    @include('layouts.manav')
    
    <script>const cBtn = document.querySelector('.c');
      const sidebar = document.querySelector('.sidebar');
      
      cBtn.addEventListener('click', function() {
        sidebar.classList.toggle('active');
      });
      </script>
   
  </header> 
 
 {{--debut de contenu--}}
    @yield('contenu')
{{--fin de contenu--}}
                                              
  
  
 
</body>
@extends('layouts.monfooter')
</html>                                            
                                               
                                
