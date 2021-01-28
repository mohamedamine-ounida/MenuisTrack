<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\clientRequest;
use Facade\FlareClient\Http\Client as HttpClient;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Contracts\Session\Session;
use Session;
session_start();
class ClientController extends Controller
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
      //  $Clc=Client::all();
        $Clc=Client::orderBy('created_at','DESC')->paginate(3);
        return view('client.create_client',compact('Clc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(clientRequest $request)
    {
        $this->app();
        $client = new Client();
        $client->nom = $request->input('nom');
        $client->numero = $request->input('numero');
        $client->adresse = $request->input('adresse');
                        if($client->save()){
                            Session::put('client_id', $client->id);
                            return redirect()->to('/produit/create/');

                        }
         
    }



    public function store1($id)
    {
        $this->app();
        $Cll = Client::find($id);
      
                        
                            Session::put('client_id', $Cll->id);
                            return redirect()->to('/produit/create/');

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
}
