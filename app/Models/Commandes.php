<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;
     protected $fillable = [
        'code_suivi',
        'produit_id',
        'quantite',
        'prix_vente',
        'status',
    ];
    public function produit(){
        return $this->belongsTo(Produits::class);
 
    }

}
