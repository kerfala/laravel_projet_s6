<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;
use App\Contrat;
use App\Utilisateur;
use App\Etudiant;
use App\Proposition_disponibilite;//a changer
use Illuminate\Support\Str;

class DisponibleController extends Controller
{
    //
     //mettre code dans show et dans la table propo dispo
    public function index(){
    	
    }
    public function store(Request $requests){
    	$new = new Etudiant();
    	//dd($new);
        //erreur ici:j'ai vu modifier la MIGRATION ou changer carrement le nom contrat_id et user_id
       //$la_requete =$requests->all();
       //dd($la_requete);
        $etudiants = Etudiant::SearchByUtilisateurId($requests->get('identifiant'))->get();        
        //dd($etudiants);
        //dd($requests->all());
        //dd($etudiants);
        //$contrat = $etudiant->contrat;
        //$contrat = Contrat::get();//iyeah
        //$contrat = $etudiants->contrat;
        $contrat = Contrat::get();
        dd($contrat->id);
        foreach ($contrat as $c) {
            if ($c->id == $etudiants->contrat_id){}
                dd($c);
            # code...
        }
        //dd($contrat);
        $debut=strtotime($requests->get('debut'));
        $fin=strtotime($requests->get('fin'));
        $disponible = Proposition_disponibilite::create(['jour' => $requests->get('jour'),
                                              'heureDebut' => $requests->get('debut'),
                                              'heureFin' => $requests->get('fin'),
                                              ]);
        Session::flash('succes','Proposition disponibilité ajouter');
        /*$contrat_disp = new $this->disponibilite(['contrat_id' => $etudiant->contrat_id,
                                                    'disponibilite_id' => $disponible->id_dispo
                                                ]);*/
       
        //faire toutes les operations necessaire pour ca

        //$contrat = Contrat
       
    }
    public function edit($id){
        dd($id);
    }
    public function show($id){
        //dd($id);
    }
    public function update($id,Request $requests){
        
        dd($requests->all());
        
       
    }
}
