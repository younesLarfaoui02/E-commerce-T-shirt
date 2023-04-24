<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;
use MongoDB\Driver\Session;

class CartController extends Controller
{
    //pubf
    public function index()
    {
        return view('front.carts.index');
    }
    public function store(Request $request,$id)
    {
        $product = Produit::find($id);
        $searchResults = Cart::search(function ($cartItem) use ($product)  {
            return $cartItem->id == $product->id;
        });

        if ($searchResults->isNotEmpty()){
            $rowId = $searchResults->first()->rowId;
            Cart::update($rowId,$searchResults->first()->qty +1 );
            return redirect()->back();
        }
        else{
            Cart::add(['id' => $product->id, 'name' => $product->nom_produit, 'qty' => 1, 'price' =>$product->prix_produit]);
        }



        return redirect()->back();
    }

}


//          $value = session('key',0);
//          $inc = session('key')+1;
//          session(['key'=>$inc]);
//          session()->save();
//          dd(session('key'));
//          the session data is not saved until the response is sent back to the client. or you can use save method
