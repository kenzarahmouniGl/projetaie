<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;

use Illuminate\Validation\ValidationException;
class AclientConroller extends Controller
{
    //
      
    public function creer_compte(Request $request )
    {
        $this->validate($request,[
            'nom' => 'required|min:4',
              'email' => 'email|required|unique:clients',
              'password' => 'required|min:4']);

              $client = new \App\Models\Client();
              $client->nom=$request->input('nom');
              $client->email=$request->input('email');
              $client->password=bcrypt( $request->input('password'));
         $client->save();
         return back()->with('status','votre compte a été crée');}

    public function acceder_compte(Request $request )
    {
        
        $this->validate($request,[
           
              'email' => 'email|required',
              'password' => 'required|min:4']);
        $client = \App\Models\Client::where('email', $request->input('email'))->first();
        if ($client) {
            # code...
            if ($client && Hash::check($request->input('password'), $client->password)) {
            // Les informations d'identification sont valides
            
                Session::put('client' ,$client);
    
                // Rediriger l'utilisateur vers la page d'accueil
                return redirect('/client');
            } else {
                // Les informations d'identification sont invalides
                return back()->with('status','Identifiant incorrect');
            }
        }else{
            return back()->with('status','Aucun compte associé à cette addresse email');
        }
        
        
    }
    
public function deconnexion(){
    Session::forget('client');
    return redirect('/');
}
}
