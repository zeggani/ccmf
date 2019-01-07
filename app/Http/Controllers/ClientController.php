<?php

namespace App\Http\Controllers;
use App\Client;
use App\Role;
use App\User;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users=array();
      if(\Auth::user()->role){
        if(\Auth::user()->role->name=="OPERATEURS" || \Auth::user()->role->name=="QUALIF" ){
          // si operateur chercher juste les client que celui la a ajouter

          $clients=Client::where("statutfiche","A")->where("createby",\Auth::user()->name)->get();
        }else if(\Auth::user()->role->name=="RESPONSABLES"){
          // si responsables chercher  ceux ajoute par les  operateurn

          $role=ROle::where("name","OPERATEURS")->first();
          // en cherche pour les users aui en le role OPERATEURS
          $users=User::where('id_roles',$role->id_roles)->get()->pluck('name');
          // en cherche les clients li creyawhoum hadouk les user  li jbdna mn 9bl

          $clients=Client::where( "statutfiche","A")->whereIn('createby',$users)->get();
       }elseif ( \Auth::user()->role->name=="RESPONSABLEQUAL") {
         // si chef de QUALIF chercher ceux ajoute par les  qualif
           $role=ROle::where("name","QUALIF")->first();
           $users=User::where('id_roles',$role->id_roles)->get()->pluck('name');
           $clients=Client::where( "statutfiche","A")->whereIn('createby',$users)->get();
        }else{
          $roles=ROle::whereIn("name",["RESPONSABLES","RESPONSABLEQUAL"])->get()->pluck('id_roles');
          $users=User::whereIN('id_roles',$roles)->get()->pluck('name');
          $clients=Client::where( "statutfiche","A")->get();
        }
        return view("clients.index",compact('clients'));
      }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("clients.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client=$request->except(['_token',"adresse_"]);
      dump($client);
        $client=Client::create($client);

          switch($client->statutfiche){
          case 'A':
return redirect(route('appels',$client->id_clients));
          break;
          case 'R':
return redirect(route('rappels',$client->id_clients));
          break;
        }


       return redirect(route('clients.show',$client));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
      return view("clients.show",compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
      return view("clients.edit",compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
      $client=$request->except(['_token','_method']);

      Client::where('id_clients',$client['id_clients'])->update($client);
      return redirect(route('clients.show',$client['id_clients']));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
      Client::where('id_clients',$client['id_clients'])->delete();
      return redirect(route('clients.index'));
    }

    public function setUpdateBy(Request $request){
      Client::where('id_clients',$request->client)->update([
        "updateby"=> $request->updateby
      ]);
        return redirect()->back();
    }



    public function setStep(Request $request){
$step=$request->step;
switch ($step) {
  case 'RESPONSABLEQUAL':
    $step="CHEFPLATEAU";
    break;

  default:
    // code...
    break;
}

      Client::where('id_clients',$request->client)->update([
        "step"=> $step
      ]);
        return redirect()->back();
    }
}
