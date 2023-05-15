<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use  Illuminate\Session\SessionManager;
use App\Models;
use Illuminate\Support\Facades\Session;
use App\Http\Models\Client;
use Illuminate\Support\Facades\DB;
class ClientController extends Controller
{
    
    
    public function client() {
       
        
         return view('pages.client');
    }
    
    public function index()
    {
        $product = DB::table('product')->get();
        return view('product')->with('product',$product);;
    }
 
}