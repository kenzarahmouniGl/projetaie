<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Models\Client;
use App\Http\Models\Collections;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models;
use Illuminate\Support\Facades\Session;


class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $name = 'Colier';

        $product = DB::table('products')
                     ->join('collections', 'products.collection_id', '=', 'collections.id')
                     ->select('products.*', 'collections.name as name')
                     ->where('collections.name', $name)
                     ->get();
        
                     return view('pages.collections.colier')->with('product',$product);
                     
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
