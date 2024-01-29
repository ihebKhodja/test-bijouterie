<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Produits extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference',
        'designation',
        'image',
        'matiere_id',
        'categorie_id',
        'prix_achat_gramme',
        'prix_vente_gramme',
        'poids_gramme',
        'remise_max',
        'quantite'
    ];

     public function categorie()
    {
        return $this->belongsTo(Categories::class);
    }

     public function matiere()
    {
        return $this->belongsTo(Matieres::class);
    }
}
