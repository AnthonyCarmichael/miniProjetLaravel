<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('produit/produits', [
            // D’autres paramètres peuvent être passés à la vue en les séparant par une virgule.
            'produits' => Produit::All()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, int $id): View
    {

        if ($request->routeIs('produit')) {
            // Placez ici votre code pour afficher la vue produit.blade.php.
            $produit = Produit::find($id);
            if (is_null($produit))
                return abort(404); // Redirige automatiquement vers la page "404 – Not found".
            return view('produit/produit', [
                'produit' => $produit
            ]);
        }
        else if ($request->routeIs('produitsCategorie')) {
            // Placez ici votre code pour afficher la vue produitsCategorie.blade.php.
            $produits = Produit::where('id_categorie','=',$id)->get();
            if (is_null($produits))
                return abort(404); // Redirige automatiquement vers la page "404 – Not found".
            return view('produit/produitsCategorie', [
                'produits' => $produits
            ]);
        }
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
