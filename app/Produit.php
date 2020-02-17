<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
   
    public function GetCategorie(){
        return $this->belongsTo('App\Categorie','categorie');
     }
     public function GetEvenement(){
        return $this->belongsTo('App\Evenement','Evenement');
     }
   
   
      /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
