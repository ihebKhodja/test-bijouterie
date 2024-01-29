<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produits;

class EcommerceController extends Controller
{
    public function index(){
            $produits = Produits::with(['categorie', 'matiere'])
                        ->where('quantite', '>', 0)
                        ->paginate(10);

        return view('ecommerce.index', ['produits'=>$produits]);

    }
}
