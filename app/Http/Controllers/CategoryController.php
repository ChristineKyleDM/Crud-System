<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    $categories = \App\Models\Category::all();
    return view('categories.index')->with('categories', $categories);
    }

    
    public function create()
    {
    return view('categories.create');
    }

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|unique:categories|max:255'
    ]);

    \App\Models\Category::create($validatedData);
    return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
    $category = \App\Models\Category::find($id);

    if (!$category) {
        abort(404);
    }

    return view('categories.edit', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
    
}
