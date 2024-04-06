<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produit extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'produits';
    protected $primaryKey = 'id_produit';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_categorie',
        'produit',
        'description',
        'prix'
    ];

    public function categorie(): BelongsTo
    {
        // Il faut préciser la classe (le modèle) avec laquelle la relation s’établit.
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }


}
