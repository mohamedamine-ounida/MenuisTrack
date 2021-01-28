<?php

namespace App\Http\Controllers;

use App\Prix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
session_start();

class PrixController extends Controller
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
    public function tchick()
    {
        $this->app();

        $tcheck = new Prix;
        if(Prix::where('Prix​dubois','>=',0)->exists()){
            //Session::put('id',$tcheck->id);
            return redirect()->to('/information/idex');
        }else{
            return redirect()->to('/information');
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
        $prixes=Prix::all();
       //return view('prix.index_prix');
       return view('prix.index_prix',compact('prixes'));
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

        $pri = new Prix();
        //$pri->Prix​dubois;
        if($pri->save()){
            Session::put('prixdubois', $pri->prixdubois);
            return redirect()->to('/information/idex');
        }
      //  $pri->save();
        //return  redirect()->to('/information/idex');

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
        $this->app();

        $prix=Prix::find($id);
        return view('prix.update_prix',['prix'=>$prix]);
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
        $this->app();

        $prix = Prix::find($id);
        $prix->Prix​dubois = $request->input('Prix​dubois');
        $prix->save();
        return redirect('/information/idex');
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
