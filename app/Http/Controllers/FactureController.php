<?php

namespace App\Http\Controllers;

use App\Facture;
use App\Client;
use App\Commande;
use App\Produit;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;
session_start();

class FactureController extends Controller
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
        $this->app();
        $factures=Facture::orderBy('created_at','DESC')->paginate(4);
      // $factures=DB::table('factures')->paginate();
        return view('facture.index_facture',compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    { 
        $this->app();
        $facture = new Facture();
        $facture->client_id= Session::get('client_id');
        $facture->produit_id= Session::get('produit_id');
        $facture->save();
       //if($client->save()){
            Session::put('facture_id', $facture->id);
        return redirect()->to('/commande');
              //return  redirect('/facture/index/');
            }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->app();
        $factures=Facture::find($id);
        $commandes=Commande::find($id);
       // $factures=DB::table('factures')->paginate();
        return view('facture.show_facture',compact('factures','commandes'));
    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
}
