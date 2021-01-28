<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{

    public function commande(){
        return $this->hasOne('App\Commande');
    }

    public function client(){
        return $this->belongsTo('App\Client','Client_id');
    }

    public function produit(){
        return $this->belongsTo('App\Produit','produit_id');
    }
    //protected $fillable = ('produit_id');
}

