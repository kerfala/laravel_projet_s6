<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EtudiantController extends Controller
{
    //
    public function index(){       
    }

    public function create(){
    	
    }

     public function store(Request $requests){     
       	dd($requests->all());
    }
   
    public function update($id,Request $requests){
       
    }
    public function show(){

    }
    
    public function edit($id){
    	

    }
    public function destroy($id){

    }
}
