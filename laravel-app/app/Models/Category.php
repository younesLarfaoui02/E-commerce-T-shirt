<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['nom'];



    public function sous_categories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function produits()
    {
        return $this->hasManyThrough(\App\Models\Produit::class , SubCategory::class ,'category_id','sous_category_id');
    }


}
