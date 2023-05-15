<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Models\Client;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Collections;
use App\Models\Boutique;
use App\Models;
use Illuminate\Support\Facades\Session;
class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $boutique = Boutique::all();
        return view('boutique.index')->with('boutique',$boutique);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('boutique.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $boutique = Boutique::create($request->all());
        
        return redirect()->route('boutique.index')->with('success', 'Product created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boutique = Boutique::find($id);
        return view('fournisseur.showb')->with('boutique', $boutique);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $boutique =Boutique::find($id);
        return view('fournisseur.editb')->with('boutique',$boutique);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $boutique = Boutique::find($id);
      $input = $request->all();
      $boutique->update($input);
      return redirect('boutique')->with('flash_message', 'uproduct Updated!');  
    }
  
      /**
       * Remove the specified resource from storage.
       */
      public function destroy(string $id)
      {
          Boutique::destroy($id);
          return redirect('boutique')->with('flash_message', 'productdeleted!');
      }
  }
