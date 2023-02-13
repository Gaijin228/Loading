<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Récupérer la catégorie parent d'une catégorie

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Récupérer la catégorie enfant d'une catégorie

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Récupérer les produits de la catégorie >> OneToMany

    public function produitsParent()
    {
        return $this->hasMany(Produit::class);
    }

    // Récupérer les produits situées dans une catégorie enfant au travers d'une catégorie parent

    public function produitsChild()
    {
        return $this->hasManyThrough(Produit::class, Category::class);
    }

    public function produits()
    {
        $produits = $this->produitsParent()
            ->with('category')
            ->get()
            ->merge(
                $this->produitsChild()
                    ->with('category')
                    ->get()
            );
        return $produits;
    }
}
