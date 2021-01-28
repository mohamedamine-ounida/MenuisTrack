<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function commande(){
        return $this->hasOne('App\Commande');
    }

    public function produits(){
        return $this->hasMany('App\Produit');
    }

    public function facture(){
        return $this->hasOne('App\Facture');
    }

}
