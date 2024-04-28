<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->session()->has('panier')) {
            $panierSession = $request->session()->get('panier');
            $panier = array();
            foreach ($panierSession as $item) {
                $produit = Produit::find($item['id_produit']);
                array_push($panier,array('produit'=>$produit,'quantite' =>$item['quantite']));
            }
        }

        return view('commande/panier', [
            // D’autres paramètres peuvent être passés à la vue en les séparant par une virgule.
            'produits' => $panier
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

        $idProduit = $request->input('id_produit');
        //dd($request);
        
        if ($request->session()->has('panier')) {
            $panier = $request->session()->get('panier');
            foreach ($panier as &$item) {
                if ($item['id_produit'] == $idProduit) {
                    $item['quantite'] +=1;
                    $request->session()->put('panier',$panier);
                    //echo('quantite + 1');
                    return $this->index($request);
                }
            }
            $request->session()->push('panier',array(
                'id_produit' => $idProduit,
                'quantite' => 1
            ));
            //echo('Ajout d\'un nouveau produit');
            return $this->index($request);
        }
        else
        {
            $panier = array(array(
                'id_produit' => $idProduit,
                'quantite' => 1
            ));
            $request->session()->put('panier',$panier);
            //echo('initialisation panier plus premier produit');
            return $this->index($request);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
