<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Commandes;
use Illuminate\Support\Str;


class CommandesController extends Controller
{
    public function index(){
        $commandes=Commandes::all();
        return view('admin.commnades.index',['commandes'=>$commandes]);
    }

    public function getCommandes()
    {
        $commandes=Commandes::with(['produit'])
            ->select('commandes.*');
        return datatables($commandes)
            ->addColumn('produit_name', function ($commandes) {
                return $commandes->produit ? $commandes->produit->reference : '-'; })
            ->rawColumns(['produit_name'])
            ->addColumn('action', function ($row) {
                    $btn  ='<button data-rowid="'. $row->id .'" class="btn btn-xs btn-primary btn-edit">Status</button>';
                    return $btn ;
            })->rawColumns(['action'])
            ->make(true);
    }


    public function store(Request $request){
        $request->validate(['produit_id'=>'required',
            'quantite'=>'required',
        ]);
        $produit = Produits::find($request->produit_id);
        if(!$produit){
            flash('Error with product')->error();
        }
        $prix_vente=$request->quantite * $produit->prix_vente_gramme;
        $produit->decrement('quantite', $request->quantite);
        $commande=Commandes::create([
            'produit_id'=>$request->input('produit_id'),
            'quantite'=>$request->input('quantite'),
            'status'=>'expedie',
            'code_suivi'=>Str::random(10),
            'prix_vente'=>$prix_vente
        ]);
         if(!$commande){
            flash('Could not pass the order')->error();
        }

        return redirect()->back();


    }


    public function update(Request $request, $id){
        $commande=Commandes::findOrFail($id);
        $commande->update(['status'=>$request->status]);
        if($commande->status =='retourne'){
            $produitId=$commande->produit_id;
            $produit = Produits::findOrFail($produitId);
            $produit->increment('quantite', $commande->quantite);
        }
        
        return ['success'=>true, 'message'=>'updated succesfuly'];

    }
}
