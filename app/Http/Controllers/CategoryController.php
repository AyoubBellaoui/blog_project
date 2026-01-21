<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function show_category()
    {
        return view("categories.create");
    }

    public function store_category (Request $request)
    {
        $request->validate([
            'name_category_input' => 'required|min:2'
        ]);
        $cat = new Category();

        $cat->name = $request->name_category_input;
        $cat->slug = Str::slug($request->name_category_input);

        $cat->save();
        // install flasher first
        flash()->success('La catégorie est créée avec succès !');
        return redirect()->route('category.list');
    }


    public function list_category()
    {
        $categories = Category::all();
        return view("categories.list", compact('categories'));
    }


    public function delete_category($id)
    {
        Category::destroy($id);
        flash()->success('La catégorie est supprimée avec succès !');
        return back();
    }
}

