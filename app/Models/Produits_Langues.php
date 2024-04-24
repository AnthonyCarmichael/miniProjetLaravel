<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Produits_Langues extends Pivot
{
    protected $table = 'produits_langue';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
