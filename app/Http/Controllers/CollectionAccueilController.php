<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Models\Client;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Collections;
use App\Models;
use Illuminate\Support\Facades\Session;

class CollectionAccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   {
       $collection=Collections::orderBy('updated_at','desc')->get();
      /* $product = DB::table('products')
       ->inRandomOrder()
       ->get();
       //->paginate(1);*/
       
       
       return view('collection.index')->with('collection',$collection);
   }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('collection.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
            $collection = Collections::create($request->all());
        
            return redirect()->route('collection.index')->with('success', 'Product created successfully.');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $collection = Collections::find($id);
        return view('fournisseur.showc')->with('collection', $collection);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $collection =Collections::find($id);
        return view('fournisseur.editc')->with('collection',$collection);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
  {
    $collection = Collections::find($id);
    $input = $request->all();
    $collection->update($input);
    return redirect('collection')->with('flash_message', 'uproduct Updated!');  
  }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Collections::destroy($id);
        return redirect('collection')->with('flash_message', 'productdeleted!');
    }
   

    
    


    
}
