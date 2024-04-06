<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategorieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Il faut retourner sous forme d’un tableau associatif les attributs du modèle
        // Produit.php. Ce modèle sera éventuellement passé à "ProduitResource" lors de
        // la construction d’une instance de cette classe.
        return [
            'id_categorie' => $this->id_categorie,
            'categorie' => $this->categorie,
            'description' => $this->description
        ];
    }
}
