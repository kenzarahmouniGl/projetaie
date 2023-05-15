<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Events\PurchaseRequest;

use App\Cart;

class PanierController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart');
        return view('panier', compact('cart'));
    }

    public function store(Request $request)
    {
        $cart = $request->json()->all();
        Session::put('cart', $cart);
        return response()->json(['success' => true]);
    }

    public function panier()
    {
        $cart = Session::get('cart');
        $cartItems = [];

        if ($cart) {
            $cartInstance = new Cart($cart);
            $cartItems = $cartInstance->items;
        }

        return view('pages.panier', ['cartItems' => $cartItems]);
    }

    
public function checkout(Request $request)
{
    // Code pour créer une nouvelle commande à partir du panier

    // Déclencher l'événement PurchaseRequest
    $user = auth()->user();
    $items = $cart->items(); // ou n'importe quel code pour récupérer les articles
    event(new PurchaseRequest($user, $items));

    // Rediriger l'utilisateur vers une page de confirmation
    return view('checkout.confirmation');
}
}
