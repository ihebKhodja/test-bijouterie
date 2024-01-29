<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->text('designation');
            $table->string('image');
            $table->unsignedBigInteger('matiere_id');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');
            $table->decimal('prix_achat_gramme',8, 2);
            $table->decimal('prix_vente_gramme',8, 2);
            $table->decimal('poids_gramme',8, 2);
            $table->decimal('remise_max', 8, 2)->nullable();
            $table->integer('quantite');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
