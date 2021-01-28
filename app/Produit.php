<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    
    public function commande(){
        return $this->belongsTo('App\Commande');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function facture(){
        return $this->hasOne('App\Facture');
    }
   
    public function prix(){
        return $this->belongsTo('App\Prix');
    }
    
    
}
