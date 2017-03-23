<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['utilisateur_id','contrat_id'];
    //la liaison contrat etudiant 3
    public function contrat(){
    	return $this->belongsTo('App\Contrat');
    }
    //la liaison horaire etudiant 4
    public function horaire(){
    	 return $this->belongsToMany('App\Horaire');
    }
    //la liaison propostion_disponibilite etudiant 5
    public function proposition_dispo(){
    	return $this->belongsToMany('App\Propo_disponibilite');
    }
    //heritage
    public function utilisateur(){
        return $this->belongsTo('App\Utilisateur');
    }
    //requete
     public function scopeSearchByUtilisateurId($query,$q){
        return $query->where('utilisateur_id',$q);
    }
    public function scopeSearchByContratId($query,$q){
        return $query->where('contrat_id',$q);
    }

}
