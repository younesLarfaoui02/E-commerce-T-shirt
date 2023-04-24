<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function index()
    {
        $new_products = Produit::all();
        return view('front.indexPage',['new_products' => $new_products ]);
    }
}
