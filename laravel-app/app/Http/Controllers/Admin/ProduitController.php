<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::with('sous_category')->get();
        return view('admin.produits.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.produits.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data


        $validatedData = $request->validate([
            'nom_produit' => 'required|string|max:255',
            'description_produit' => 'required|string',
            'prix_produit' => 'required|numeric',
            'quantite_produit' => 'required|integer',
            'image_produit' => 'required|image|mimes:jpeg,png,jpg,gif,svg', // 1MB max size for image
            'select' => 'required',
        ]);
        $imageName = time().'.'.$request->image_produit->extension();

        $request->image_produit->move(public_path('images'), $imageName);

        $Subcategory = SubCategory::where('id', $request->select)->first();
        // Create the new product instance
        $product = new Produit();
        $product->nom_produit = $validatedData['nom_produit'];
        $product->description_produit = $validatedData['description_produit'];
        $product->prix_produit = $validatedData['prix_produit'];
        $product->quantite_produit = $validatedData['quantite_produit'];
        $product->image_produit = $imageName;
        $product->sous_category_id = $Subcategory->id;
        $product->save();

        // Redirect to the index page with a success message
        return redirect()->route('produits.index')->with('success', 'Product created successfully!');
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
