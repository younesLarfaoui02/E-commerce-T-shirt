<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nom' => 'required|unique:categories|max:255',
        ]);
        $category = new Category;
        $category->nom = $request->nom;
        $category->save();

        return redirect()->route('categories.index')
            ->with('success', 'La catégorie a été crée avec succès.')
            ->withInput() ;
    }


    public function update(Request $request, string $id)
    {

        $validator = $request->validate([
            'nom' => 'required|unique:categories|max:255',
        ]);
        Category::find($id)->update($request->all());

        return redirect()->route('categories.index')
            ->with('success', 'La catégorie a été changée avec succès.')
            ->withInput() ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::find($id)->delete();
        return redirect()->back();
    }

    public function delete_all(Request $request)
    {
            $categories = Category::all();
//            return DataTables::of()

            return view('admin.categories.index');
    }
}
