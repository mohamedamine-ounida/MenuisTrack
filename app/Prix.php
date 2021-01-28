<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prix extends Model
{

     public function produits(){
         return $this->hasMany('App\Produit','prix_id');
     }
}
