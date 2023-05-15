@extends('layouts.cnx')
@extends('layouts.app1')

  
    @section('contenu')
 
    <div class="kn">
      <div class="login-content">
          <form action="{{URL('/creer_compte')}}" method="POST">
            @method('post')
           {{ csrf_field() }}
              <h2 class="title">Inscription</h2>
             
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Nom</h5>
                   
                    <input type="text" name="nom" class="input">
                </div>
            </div>
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
              
              <input type="submit" class="btn" value="Inscription">
              <a href="{{URL::to('/connexion')}}">Connectez-vous?</a>
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