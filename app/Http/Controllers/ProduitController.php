<?php

namespace App\Http\Controllers;

use App\Client;
use App\Prix;
use App\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\cmdRequest;
use Session;
session_start();

class ProduitController extends Controller
{
    public function app(){
        $admin=session::get('id');
        if($admin){
            return;
        }else{
            return redirect()->to('/')->send();
        }
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->app();
        return view('produit.create_produit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cmdRequest $request)
    {
        $this->app();
        
        $produit = new Produit();
        $prix=DB::table('prixes')->first();
        $produit->type = $request->input('type');
        $produit->longueur = $request->input('longueur');
        $produit->largeur = $request->input('largeur');
        $produit->hauteur = $request->input('hauteur');
        $produit->couleur = $request->input('couleur');
        $produit->qualite = $request->input('qualite');
        //$produit->prixdubois= Session::get('priprixdubois');
        $produit->prix_id= $prix->Prix​dubois;
        $produit->client_id= Session::get('client_id');
        $produit->totale = $this->total($produit->longueur,$produit->largeur,$produit->hauteur,$produit->prix_id,$produit->qualite);
        if($produit->save()){
            Session::put('produit_id', $produit->id);            
            return redirect()->to('/facture/');
        }
        //return view('facture');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function total($longueur,$largeur,$hauteur,$prix_id,$qualite)
         {     $flos= (($longueur * $largeur * $hauteur )* $prix_id);
               if($qualite==0){
                 return $flos;
                }else{ 
                 return $flos+($flos*0.25); }
               
        }





}
