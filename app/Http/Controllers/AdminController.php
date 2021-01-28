<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $id)
    {
        $email = $id->input('email');
        $Password = $id->input('Password');

        $checkLogin = DB::table('admins')->where(['email'=>$email,'Password'=>$Password])->first();

        if($checkLogin ){
            Session::put('id',$checkLogin->id);
            return redirect()->to('/Dashboard');
        
        }else{
            session()->flash('flaslogin','email ou Password pas correct');
            return back();
        }
    }


    public function deconecte(){
        Session::flush();
        return redirect()->to('/login');
    }




}
