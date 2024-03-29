<?php

namespace App\Http\Controllers;

use App\Models\Category;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public  function category()
    {
        $categorys = Category::orderBy('id','desc')->paginate(10);
        return view('category.category', compact('categorys'));
    }

    public function addCategory(Request $req)
    {
        $req->validate([
            'category' => 'required|unique:categories',
        ]);

        Category::create([
            'category' => $req->category,

        ]);
        // return redirect()->route('dashboard');
        // return view('category.category');
        return redirect()->route('category')->with('success', "Category added successfully");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.editCategory', ['category' => $category]);
    }
    public function editCategory(Request $req)
    {
        $category = Category::find($req->id);
        $category->update([
            'category' => $req->category,
        ]);
        return redirect()->route('category')->with('success', "Category updated successfully");
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category')->with('success', "Category deleted successfully");
    }
}
