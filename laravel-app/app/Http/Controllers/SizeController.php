<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::all();
        return view('admin.sizes.index',['sizes' => $sizes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'size_name' => 'required|unique:sizes|max:10',
        ],[
            'size_name.required' =>'field is required !',
            'size_name.unique' => 'size already Exists !']);

        $size = new Size;
        $size->size_name = $request->size_name;
        $size->save();
        return redirect()->route('sizes.index')->with('success','size is created correctly !');;
    }

    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Size $size)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        //
    }
}
