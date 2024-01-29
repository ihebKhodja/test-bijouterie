<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matieres;


class MatieresController extends Controller
{

       public function create(){
         $matieres = Matieres::all();
           
        // dd($categories);

        return view('admin.matieres')->with([
            'matieres'=>$matieres,
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
            $category = Matieres::create([
                'name' => $request->input('name'),
            ]);

            // flash('Matiere created successfully.')->success();
            return redirect()->route('admin.produits.create')->with('success', 'matiere created successfully.');

        } catch (\Exception $e) {
            // Handle any exception that occurs during the process
            // flash('Error creating category.')->error();
            return redirect()->back();
        }
    }
}
