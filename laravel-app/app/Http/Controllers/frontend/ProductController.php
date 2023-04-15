<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    


    public function get_all_products(){


        $products = Produit::with('category')->paginate(10);
        $totalProducts = $products->total();

        return view('front.products.all_products',['products' => $products]);
    }
}
