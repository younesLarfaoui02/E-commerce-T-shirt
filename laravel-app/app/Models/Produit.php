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
    prix_produit','quantite_produit','image_produit','category_id'];


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
