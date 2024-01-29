<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;


class CategoriesController extends Controller
{
    public function index()
    {
        try {
            $categories =Categories::all();
            return view('admin.categoires', 'categories');
        } catch (\Exception $e) {
        }
    }


    public function create(){
         $categories = Categories::all();
           
        // dd($categories);

        return view('admin.categoires')->with([
            'categories'=>$categories,
        ]);
    }
  public function store(Request $request)
    {
        try {
            // Validate the request data
            $request->validate([
                'name' => 'required|string|max:255',
            ]);

            // Create a new category
            $category = Categories::create([
                'name' => $request->input('name'),
            ]);

            // flash('Category created successfully.')->success();
            return redirect()->route('admin.produits.create')->with('success', 'category created successfully.');

        } catch (\Exception $e) {
            // Handle any exception that occurs during the process
            // flash('Error creating category.')->error();
            return redirect()->back();
        }
    }

}
