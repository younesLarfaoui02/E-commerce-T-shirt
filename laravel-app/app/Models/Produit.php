<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';
    protected $fillable = ['nom_produit','description_produit','
    prix_produit','quantite_produit','image_produit','sous_category_id'];


    public function sous_category()
    {
        return $this->belongsTo(SubCategory::class, 'sous_category_id');
    }
}
