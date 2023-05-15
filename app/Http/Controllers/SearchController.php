<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('q');
        $product = Products::where('name', 'LIKE', '%'.$searchTerm.'%')->get();

        return view('search', compact('product', 'searchTerm'));
    }
}

