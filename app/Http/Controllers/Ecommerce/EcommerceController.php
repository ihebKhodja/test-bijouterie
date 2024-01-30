<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Categories;

class EcommerceController extends Controller
{

    public function index(Request $request)
    {
    $categoryId = $request->query('categorie_id');

    $query = Produits::with(['categorie', 'matiere'])
    ->where('quantite', '>', 0);
    
    if ($categoryId) {
        $query->whereHas('categorie', function ($q) use ($categoryId) {
            $q->where('id', $categoryId);
        });
    }
    
    $produits = $query->paginate(10);
    $categories = Categories::all();
    
    return view('ecommerce.index', ['categories'=>$categories, 'produits'=>$produits]);
}



}