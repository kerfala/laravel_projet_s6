<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

use App\Http\Requests;
use App\Utilisateur;
use App\Etudiant;
use App\Responsable;
use App\Proposition_disponibilite;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Str;


class ConnexionController extends Controller
{
    //
    public function index(){
    	
    }
    
    public function show($id){
    	//la connexion pas terminer gere les3 interfaces admin etudiant salarie

    	$etudiants = Etudiant::get();
    	$users = Utilisateur::get();
    	$connecter = Utilisateur::findOrFail($id);
    	$responsables = Responsable::get();
        $propo = Proposition_disponibilite::get();
        /*"2017-03-20T08:00:00+00:00",
            "2017-03-20T15:00:00+00:00",*/

        $debut = Carbon::create(2017,03,20,08,0,0);
        $fin= Carbon::create(2017,03,20,15,0,0);
        $debut = "2017-03-20 08:00:00+00:00";
           $fin= "2017-03-20 15:00:00+00:00";
           $format = "Y-m-d H:i:s";
           //dd($propo->jour);
       // $debut = $propo->created_at;
        //$debut = $propo->updated_at;
          // new DateTime::createFromFormat("Y-m-d H:i:s",date($debut));
           //new DateTime::createFromFormat("Y-m-d H:i:s",date($fin));
    	$events = [];
        $events = Calendar::event (
            "nom event 0",
            true,
            $debut,
            '2017-03-21T15:00:00+00:00',
            0
            );
        $calendar = Calendar::addEvent($events);
                               /* ->setOptions([
                                            'firstday'=>1
                                    ])->setCallbacks([]);*/
    	//Interface etudiant
        foreach ($etudiants as $etu){
            foreach ($users as $user){
                if ($user->id == $etu->utilisateur_id)
                    return view('pages.etudiant',compact('connecter','users','etudiants','calendar'));
            }
        }
        //Interface admin
    	foreach ($responsables as $responsable){
			foreach ($users as $user){
				if ($user->id == $responsable->utilisateur_id)
					return view('pages.responsable',compact('connecter','users','etudiants'));
			}
		}
    	
    	

		
		//interface salarie a faire

    	
    }
    public function store(Request $requests){
    	//liste user 
         //dd(Session::all());
    	 $email = $requests->get('email');
    	 $pass  = $requests->get('pass');
    	 $users = Utilisateur::get();
    	 foreach ($users as $user) {
    	 	if ($email == $user->email && $pass == $user->motDePasse ){
    	 		return redirect(route('connexion.show',compact('user')));
    	 	}
    	 	
    	 }
    	 //ici message flash
    	 return redirect(route('new.index'))->with('probleme','mot de passe ou email invalide');
    }
}
