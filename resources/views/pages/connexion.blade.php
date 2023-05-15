@extends('layouts.cnx')
@extends('layouts.app1')



    @section('contenu')

    <div class="kn">
      <div class="img">

      </div>
      <div  class="login-content">
        @if (Session::has('status'))
        <div class="alert alert-danger">
          {{Session::get('status')}}
        </div>   
        @endif
        @if (count($errors)>0)
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
                  
              @endforeach
          </ul>
        </div>
            
        @endif
       
        <form action="{{URL('/acceder_compte')}}" method="POST">
          @method('post')
        @csrf
       <h2 class="title">Connexion</h2>
        
              <div class="input-div one">
                  <div class="i">
                      <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                      <h5>Email</h5>
          
                      <input type="text" name="email" class="input">
                  </div>
              </div>
              <div class="input-div pass">
                  <div class="i">
                      <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                      <h5>Mot de passe</h5>
                      <input type="password" name="password" class="input">
                  </div>
              </div>
              <a href="#">Mot de passe oublié?</a>
              <input type="submit" class="btn" value="Connexion">
              <a href="{{URL::to('/inscription')}}">Inscriez-vous?</a>
          </form>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
      const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
    </script>
   
      @endsection