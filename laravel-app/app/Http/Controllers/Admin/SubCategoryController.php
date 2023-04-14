<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::with('category')->get();
        return view('admin.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategories.create',['categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customMessages = [
            'nom.required' => 'The name  is required.',
            'nom.unique' => 'Already Exists...',
            'categorie_id.required' => 'Please Select A Category.',

        ];
        try {
            $validate = $request->validate([
                'nom' => 'required|unique:sous_categories|unique:categories|max:255',
                'categorie_id' => 'required',
            ],$customMessages);    

        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withInput()->withErrors($request->validate([
                'nom' => 'required|unique:sous_categories|unique:categories|max:255',
                'categorie_id' => 'required',
            ],$customMessages));
        }

        $sous_category = new SubCategory;
        $sous_category->nom = $request->nom;
        $sous_category->category_id = $request->categorie_id;
        $sous_category->save();
    
        return redirect()->route('subcategories.index')
            ->with('success', 'La sous catégorie a été créée avec succès.');
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


    public function get_sub_categories($id){

        $category = Category::findOrFail($id);
        $subcategories = $category->sous_categories;
        return response()->json($subcategories);

    }
}
