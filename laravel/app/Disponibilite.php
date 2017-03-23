<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
   	protected $fillable = ['jour','heureDebut','heureFin'];
   	//la liaison contrat disponibilite 1
   	public function contrat(){
   		return $this->belongsToMany('App\Contrat')
   	}
}
