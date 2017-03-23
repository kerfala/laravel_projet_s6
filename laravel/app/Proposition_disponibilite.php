<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposition_disponibilite extends Model
{
    //
    protected $fillable = ['jour','heureDebut','heureFin'];
    //la liaison propostion_disponibilite etudiant 5
    public function etudiant(){
    	 return $this->belongsToMany('App\Etudiant');
    }
}
