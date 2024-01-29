<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Categories;
use App\Models\Matieres;
use Purifier;

class ProduitsController extends Controller
{
    public function index()
    {
        try {
            
            $produits = Produits::all();
            return view('admin.produits.index', ['produits'=>$produits]);


        } catch (\Exception $e) {
            flash('Error fetching products.')->error();
            return redirect()->back();
        }
    }


    public function getProduits()
    {
        $produits=Produits::with(['categorie', 'matiere'])
            ->select('produits.*')
            ->where('is_archived', false);

        return datatables($produits)
            ->addColumn('categorie_name', function ($produit) {
                return $produit->categorie ? $produit->categorie->name : '-'; })
            ->rawColumns(['categorie_name'])
            ->addColumn('matiere_name', function ($produit) {
                return $produit->matiere ? $produit->matiere->name : '-';})
            ->rawColumns(['matiere_name']) 
            ->addColumn('action', function ($row) {
                    $btn  = '<button class="btn btn-xs btn-secondary btn-edit">Edit</button> ';
                    $btn  =$btn. '<button data-rowid="'. $row->id .'" class="btn btn-xs btn-danger btn-delete">Archive</button>';
                    return $btn ;
            })->rawColumns(['action'])
            ->make(true);
    }

    public function create(){
         $categories = Categories::all();
         $matieres = Matieres::all();
           
        return view('admin.produits.create')->with([
            'categories'=>$categories,
            'matieres'=>$matieres
        ]);
    }

    



   public function store(Request $request){         

        try{
            $validated=$request->validate([
                'reference' => 'required|string|max:255',
                'designation' => 'required|string|max:255',
                'matiere_id'=>'required',
                'categorie_id'=>'required',
                'prix_achat_gramme'=>'required',
                'prix_vente_gramme'=>'required',
                'poids_gramme'=>'required',
                'remise_max'=>'required',
                'quantite'=>'required',
                'image' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

             if(!$validated){
                flash('Product is not created')->error();
                return redirect()->back();

            }
            
            if($request->hasfile('image')){
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('uploads/produits/', $filename);
                $product = Produits::create([   
                    'reference'           => $request->reference,
                    'designation'         => $request->designation,
                    'matiere_id'          => $request->matiere_id,     
                    'categorie_id'        => $request->categorie_id,
                    'prix_achat_gramme'   => $request->prix_achat_gramme,
                    'prix_vente_gramme'   => $request->prix_vente_gramme,
                    'poids_gramme'        => $request->poids_gramme,
                    'remise_max'          => $request->remise_max,
                    'quantite'            => $request->quantite,
                    'image'               =>$filename
                ]);
                
            }

            return redirect()->back();

            
           
        }catch (\Exception $e) {
            \Log::error('Error creating product: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while creating the product.');
        }
        
        
        
    }
    public function update(Request $request,$id)
    {       

        $produit=Produits::find($id);

        if (!$produit) {
            flash('Product was not found')->error();
            return redirect()->back();

        }
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/produits/', $filename);
            $product->update(['image' => $filename]);
            
        }
            $produit->fill($request->except(['image']));
            $produit->save();   

        return ['success'=>true, 'message'=>'updated succesfuly'];
    }


    public function archive($id)
    {
        $produit = Produits::find($id);
        if (!$produit) {
            flash('Product was not found')->error();
            return redirect()->back();

        }

        $produit->is_archived = !$produit->is_archived; 
        $produit->save();
        return ['success'=>true, 'message'=>'archived succesfuly'];
    }
    
    public function archiveall(Request $request)
    {
        $produit_id_array = $request->input('id');
        $produit = Produits::whereIn('id', $produit_id_array);
    
        if($produit->is_archived)
        {
            flash('Product is archived')->success();

        }
     }



}

