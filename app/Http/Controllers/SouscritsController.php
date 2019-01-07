<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Role;
use App\User;

class SouscritsController extends Controller
{
    // public function souscrits(Request $request){
    //   $clients=Client::where('nom', $request->nom)
    //   ->orWhere('prenom', $request->prenom)->get();
    //   if(count($clients)>0){
    //     $client=$clients[0];
    //   }else{
    //     $client=null;
    //   }
    //     return view('souscrits',compact("client"));
    // }
    public function souscrits(Request $request){
      if(\Auth::user()->role){
        if(\Auth::user()->role->name=="OPERATEURS" || \Auth::user()->role->name=="QUALIF" ){
          // si operateur chercher juste les client que celui la a ajouter
          $clients=Client::where("statutfiche","Souscr")->where("createby",\Auth::user()->name)->get();
        }else if(\Auth::user()->role->name=="RESPONSABLES" ){
          // si responsables chercher  ceux ajoute par les  operateurn

          $role=ROle::where("name","OPERATEURS")->first();
          // en cherche pour les users aui en le role OPERATEURS
          $users=User::where('id_roles',$role->id_roles)->get()->pluck('name');
          // en cherche les clients li creyawhoum hadouk les user  li jbdna mn 9bl

          $clients=Client::where( "statutfiche","Souscr")->whereIn('createby',$users)->get();
       }elseif ( \Auth::user()->role->name=="RESPONSABLEQUAL") {
         // si chef de QUALIF chercher ceux ajoute par les  qualif
           $role=ROle::where("name","QUALIF")->first();
           $users=User::where('id_roles',$role->id_roles)->get()->pluck('name');
           $clients=Client::where( "statutfiche","Souscr")->whereIn('createby',$users)->get();
        }else{
          $roles=ROle::whereIn("name",["RESPONSABLES","RESPONSABLEQUAL"])->get()->pluck('id_roles');
          $users=User::whereIN('id_roles',$roles)->get()->pluck('name');
          $clients=Client::where( "statutfiche","Souscr")->get();
        }
        return view('souscrits',compact("clients","users"));
      }

    }
}
