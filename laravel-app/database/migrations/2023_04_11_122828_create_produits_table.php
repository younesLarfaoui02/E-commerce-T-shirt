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
            $table->string('nom_produit');
            $table->text('description_produit');
            $table->decimal('prix_produit', 10, 2);
            $table->integer('quantite_produit');
            $table->string('image_produit');
            // $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade'); // new syntax >php7
            // $table->unsignedBigInteger('categorie_id');
            // $table->foreign('categorie_id')->references('id')->on('categories'); // old syntax <php7
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
