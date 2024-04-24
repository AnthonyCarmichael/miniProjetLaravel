<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id_categorie';
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categorie',
        'description'
    ];


    public function produits(): HasMany
    {
        // Il faut préciser la classe (le modèle) avec laquelle la relation s’établit.
        return $this->HasMany(Produit::class, 'id_produit');
    }

    public function getCategoriesLangue()
    {
        return $this->hasMany(CategoriesLangues::class, 'id_categorie');
    }

    public function traduction()
    {
        $langue = Langue::where('code', app()->getLocale())->first();
        return $this->getCategoriesLangue->where('id_langue', $langue->id_langue)->first();
    }
}
