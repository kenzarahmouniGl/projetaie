<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Collections;
use App\Models\Boutique;
use App\Models\User;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $product = Products::all();
        return view('fournisseur.index')->with('product',$product);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collections = Collections::all();
        $boutiques = Boutique::all();
        return view('fournisseur.create', compact('collections', 'boutiques'));
        return view('fournisseur.create');
    }
    
  

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string',
             'description' => 'required|string',
             'prix' => 'required|numeric',
             'reference' => 'required|string|unique:products',
             'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
             'collection_id' => 'required|exists:collections,id',
             'boutique_id' => 'required|exists:boutique,id',
         ]);
     
         $collection_id = $request->input('collection_id');
         $boutique_id = $request->input('boutique_id');
     
         $product = new Products();
         $product->name = $request->input('name');
         $product->description = $request->input('description');
         $product->prix = $request->input('prix');
         $product->reference = $request->input('reference');
         $product->collection_id = $collection_id;
         $product->boutique_id = $boutique_id;
     
         // Enregistrement de l'image
         $image = $request->file('photo');
         $filename = time() . '_' . $image->getClientOriginalName();
         $image->move(public_path('images'), $filename);
         $product->photo = $filename;
     
         $product->save();
     
         return redirect()->route('produit.index')->with('success', 'Product created successfully.');
     }
     

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        $product = Products::find($id);
        return view('fournisseur.show')->with('product', $product);
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Products::find($id);
        $collections = Collections::all();
        $boutiques = Boutique::all();
        return view('fournisseur.edit', compact('product', 'collections', 'boutiques'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'reference' => 'required|string|unique:products,reference,'.$id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'collection_id' => 'required|exists:collections,id',
            'boutique_id' => 'required|exists:boutique,id',
        ]);
    
        $product = Products::find($id);
    
        $input->name = $request->input('name');
        $input->description = $request->input('description');
        $input->prix = $request->input('prix');
        $input->prix = $request->input('photo');
        $input->reference = $request->input('reference');
        $input->collection_id = $request->input('collection_id');
        $input->boutique_id = $request->input('boutique_id');

        $product->update($input);

        return redirect()->route('collection.index')->with('success', 'Product updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Products::destroy($id);
        return redirect('produit')->with('flash_message', 'productdeleted!');
    
    }
    //////////////////Contacter l'admin//////////////////
   

}
