<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Utilisateur;
use App\Etudiant;
use App\Conges;
use App\Propo_disponibilite;
use Carbon\Carbon;
use Illuminate\Support\Str;
class CongesController extends Controller
{
    //
    public function index(){
        
    }
    public function store(Request $requests){
        if ($requests->get('identifiant')){
        	$etudiants = Etudiant::get();
        	$users     = Utilisateur::get();
        	$connecter = Utilisateur::findOrFail($requests->get('identifiant'));
        	$etudiant  = Etudiant::SearchByUtilisateurId($requests->get('identifiant'))->get();
        	$user      = Utilisateur::findOrFail($requests->get('identifiant'));
        
        	/*conversion des donnees type date*/ 
        	$d     = str_limit($requests->get('debut'),$limit=10,$end='');
            $debut = date('Y-m-d',strtotime($d));
           
            $d     = str_limit($requests->get('fin'),$limit=10,$end='');
            $fin   = date('Y-m-d',strtotime($d));
            //********
        	$conge = Conges::create(['dateDebut' => $debut,
        							  'dateFin' => $fin,
        							  'validation',false,
        							  'utilisateur_id' => $user->id,
        							  ]);
        	//message flash
         	return view('pages.etudiant',compact('users','etudiants','connecter'))->with('succes','congé pris en compte');
        }
    }
    public function edit($id){
    	dd($id);
    }
    public function show($id){
    	//dd($id);
    }
    public function update($id,Request $requests){
        
        dd($requests->all());
        dd($id);
        //faire toutes les operations necessaire pour ca
       
    }
}
