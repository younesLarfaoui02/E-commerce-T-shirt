<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubCategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::with('category')->get();
        return view('admin.subcategories.index',compact('subcategories','categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategories.create',['categories' => $categories]);

    }


    public function store(Request $request)
    {

        $customMessages = [
            'nom.required' => 'The name  is required.',
            'nom.unique' => 'The name you provided is already exists .',
            'category_id.required' => 'Please Select A Category.',

        ];
        $validate = $request->validate([
                    'nom' => ['unique:sous_categories,nom','unique:categories,nom'
                        ],
                    'category_id' => 'required',
                ],$customMessages);



        $sous_category = new SubCategory;
        $sous_category->nom = $request->nom;
        $sous_category->category_id = $request->category_id;
        $sous_category->save();

        return redirect()->route('subcategories.index')
            ->with('success', 'La sous catégorie a été crée avec succès.');
    }






    public function update(Request $request, string $id)
    {
        $customMessages = [
            'nom.required' => 'The name  is required.',
            'category_id.required' => 'Please Select A Category.',

        ];
        $validate = $request->validate([
            'nom' => [
                Rule::unique('sous_categories')->ignore($id),
            ],
            'category_id' => 'required',
        ],$customMessages);



        SubCategory::find($id)->update($request->all());

        return redirect()->route('subcategories.index')
            ->with('success', 'La sous catégorie a été changée avec succès.');
    }


    public function destroy(string $id)
    {
        SubCategory::find($id)->delete();
        return redirect()->back();
    }


    public function get_sub_categories($id){

        $category = Category::findOrFail($id);
        $subcategories = $category->sous_categories;
        return response()->json($subcategories);

    }
}
