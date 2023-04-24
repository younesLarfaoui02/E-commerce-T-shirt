<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function get_all_products()
    {

        $categories = Category::with('produits')->get();
        $products = Produit::with('sous_category')->paginate(10);
        $send_all = true;
        return view('front.products.all_products', ['products' => $products, 'categories' => $categories, 'send_all' => $send_all]);
    }

    public function get_by_category($category_name, $sous_categories = null)
    {
//        if($sous_categories) {
//            $get_category = Category::where('nom', $category_name)->first();
//            if($get_category){
//                $get_sub_categories =
//                $get_products = SubCategory::with('produits')->where('nom',$sous_categories)->first();
//            } else{
//                return abort(403);
//            }
//        }
        $get_category = Category::where('nom', $category_name)->first();
        $one_category = true;
        if ($get_category) {
            $get_category_w_produits = Category::with('produits')->where('nom', $category_name)->first();
            if ($get_category_w_produits) {
                $get_products = $get_category_w_produits->produits()->paginate(8);
                $get_category_w_sous_categories = Category::with('sous_categories')->where('nom', $category_name)->first();
                if ($get_category_w_sous_categories) {
                    $get_sous_categories = $get_category_w_sous_categories->sous_categories()->paginate(8);
                }

            }
        } else {
            return response()->json(['category' => 'not found']);
        }
        return view('front.products.all_products', ['products' => $get_products, 'categories' => $get_sous_categories, 'category_nom' => $get_category,'one_category' => $one_category]);
    }

    public function get_by_sub_category($category_name, $sous_category_name )
    {
        $get_category = Category::where('nom', $category_name)->first();
        $get_sub_category = SubCategory::where('nom', $sous_category_name)->first();

        if ($get_category && $get_sub_category) {
            $get_sub_category = SubCategory::with('produits')->where('id',$get_sub_category->id)->
                            where('category_id',$get_category->id)->first();
            $get_products = $get_sub_category->produits()->paginate(8);
            $get_other_sub_categories = SubCategory::where('category_id',$get_category->id)->
            whereNotIn('nom',[$get_sub_category->nom])->get();
        }else {
            return response()->json(['category or sous category' => 'not found']);
        }
        return view('front.products.all_products', ['products' => $get_products, 'categories' => $get_other_sub_categories, 'category_nom' => $get_category]);

    }

    public function show($id)
    {


        $product = Produit::find($id);
        $sous_category = $product->sous_category;
        $products = $sous_category->produits->whereNotIn('id',[$id]);
        return view('front.products.product_details',['product' => $product ,'related_products' =>$products,'sous_category'=>$sous_category]);
    }
}
