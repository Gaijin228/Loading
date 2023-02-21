<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    private static $facteur_tva = 1.2;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function recommandations()
    {
        return $this->belongsToMany(Produit::class, 'produit_recommande', 'produit_id', 'produit_recommande_id');
    }

    public function prixTTC()
    {
        $prix_ttc = $this->prix_ht * self::$facteur_tva;

        return number_format($prix_ttc, 2);
    }
}
