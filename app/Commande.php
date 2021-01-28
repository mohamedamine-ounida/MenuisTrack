<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    

    public function facture(){
        return $this->belongsTo('App\facture','facture_id');
    }

    public function produits(){
        return $this->hasMany('App\Produit','produit_id');
    }

    
    public function client(){
        return $this->hasOne('App\Client','client_id');
    }



    // protected static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($commande) {
    //         $commande->produits()->delete();
    //         $commande->facture()->delete();
    //     });

    // }
    
}
