<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Models\Client;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Collections;
use App\Models;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function client() {
   
        return view('pages.client');
   }
   public function index()
   {
       $product=Products::orderBy('updated_at','desc')->paginate(4);
      /* $product = DB::table('products')
       ->inRandomOrder()
       ->get();
       //->paginate(1);*/

       return view('pages.client')->with('product',$product);
       
   }

 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
   



}
