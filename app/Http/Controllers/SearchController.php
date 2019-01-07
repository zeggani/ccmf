<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class SearchController extends Controller
{
    public function search(Request $request){
      $clients=Client::where('nom', $request->nom)
      ->orWhere('prenom', $request->prenom)->get();
      if(count($clients)>0){
        $client=$clients[0];
      }else{
        $client=null;
      }
        return view('clients.create',compact("client"));
    }


    public function newForm(Request $request){
        return view('newForm');
    }
}
