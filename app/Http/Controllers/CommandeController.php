<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commande;
use App\Facture;
use App\Http\Requests\loginclientRequest as RequestsLoginclientRequest;
use App\Produit;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Http\loginclientRequest;
use Illuminate\Support\Facades\DB;
use Session;
session_start();

class CommandeController extends Controller
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
        //return view('commande.index');
      //  $commandes=Commande::paginate(4);
        $commandes=Commande::orderBy('created_at','DESC')->paginate(4);
         return view('commande.index',compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->app();
         $commande = new Commande();
         $commande->facture_id= Session::get('facture_id');
         $commande->client_id= Session::get('client_id');
         $commande->produit_id= Session::get('produit_id');
         $commande->montantavance;
         $commande->apportezlesmatières;
         $commande->réalisation;
         $commande->teinture;
         $commande->fin;
         $commande->save();
         //return redirect()->to('/commande');
         return  redirect('/facture/show/'.$commande->facture_id);
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
        $commandes=Commande::find($id);
         return view('commande.show',compact('commandes'));
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
        
        $commande=Commande::find($id);
        $commande->delete();
        $commande=Facture::find($id);
        $commande->delete();
        $commande=Produit::find($id);
        $commande->delete();
        
        session()->flash('flascommande','la commande a été bien supprimier!');
        return back();
        

    }


    public function suivi(RequestsLoginclientRequest $request)
    {
         $id=$request->input('sui');
         $com=Commande::find($id);
         return view('suivi.suivi_client',compact('com'));

    }


    public function updatemontantavance($id)
    {
        $this->app();
        DB::table('commandes')->where('id', $id)->update(['montantavance'=> 1]);
        return back();
    }

    public function updateapportezlesmatières($id)
    {
        $this->app();
        DB::table('commandes')->where('id',$id)->update(['apportezlesmatières'=> 1]);
        return back();
    }

    public function updateréalisation($id)
    {
        $this->app();
        DB::table('commandes')->where('id',$id)->update(['réalisation'=> 1]);
        return back();
    }

    public function updateteinture($id)
    {
        $this->app();
        DB::table('commandes')->where('id',$id)->update(['teinture'=> 1]);
        return back();
    }

    public function updatefin($id)
    {
        $this->app();
        DB::table('commandes')->where('id',$id)->update(['fin'=> 1]);
        return back();
    }



    public function Dashboard()
    {
        $this->app();

        //$Dash=DB::table('Commandes')->latest()->first();
        //$Dash=Commande::latest()->first();
     //   $Dash=Commande::where('fin',0)->get();
          $Dashs=Commande::where('fin',0)->latest()->paginate(1);

        return View('Dashboard',compact('Dashs'));
    }





}

