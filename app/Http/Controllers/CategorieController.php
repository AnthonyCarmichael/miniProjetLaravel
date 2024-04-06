<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

use App\Http\Resources\CategorieResource;


class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('categorie/categories', [
            // D’autres paramètres peuvent être passés à la vue en les séparant par une virgule.
            'categories' => Categorie::All()
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
        if ($request->routeIs('insertionCategorieApi')) {
            $validation = Validator::make($request->all(), [
                'categorie' => 'required',
                'description' => 'required|max:250'], 
                [
                'categorie.required' => 'Veuillez entrer une categorie.',
                'description.required' => 'Veuillez inscrire une description pour le produit.',
                'description.max' => 'Votre description de produit ne peut pas dépasser 250 caractères.'
            ]);
            if ($validation->fails()) {
                // On répond à la requête de Postman en plaçant toutes les erreurs qui ont pu survenir dans
                // un conteneur JSON avec un code HTTP 400.
                return response()->json(['ERREUR' => $validation->errors()], 400);
            } 
            $contenuDecode = $validation->validated();
            // Rendu ici, les données ont été validées et décodées dans le tableau associatif $contenuDecode.
            // Il faut alors procéder à l’insertion du produit en BD.
            try {
                Categorie::create([
                'categorie' => $contenuDecode['categorie'],
                'description' => $contenuDecode['description']
                ]);
                return response()->json(['SUCCÈS' => 'La categorie a bien été ajouté.'], 200);
            } catch (QueryException $erreur) {
                report($erreur);
                return response()->json(['ERREUR' => 'La categorie n\'a pas été ajouté.'], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Categorie $categorie)
    {
        if ($request->routeIs('categoriesApi')) {
            $categories = Categorie::All();
            if (empty($categories))
                return response()->json(['ERREUR' => 'Les catégories sont introuvable.'], 400);
            return CategorieResource::collection(Categorie::All());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
