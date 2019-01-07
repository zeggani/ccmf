@extends('layouts.app')

@section('content')

<div class="container">
                <table class="table table-hover">
                  <tr>
                    <td>id</td>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <!-- <td>Adresse</td> -->
                    <td>Code Postal</td>
                    <td>Ville</td>
                    <td>Date de création</td>
                    <td>RDV de client</td>

                    <td><a class="btn" style="float:right;background:#38c172;color:white;" href="{{route('clients.create')}}">Nouveau Prospet</a></td>
                  </tr>
                    @foreach($clients as $client)
                      <tr>
                        <td>{{$client->id_clients}}</td>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <!-- <td>{{$client->adresse}}</td> -->
                        <td>{{$client->cp_client}}</td>
                        <td>{{$client->ville}}</td>
                        <td>{{$client->datecreation}}</td>
                        <td>{{$client->lheure_client}}</td>
                        <td><a class="btn" style="background:#38c172;color:white;" href="{{route('clients.edit',$client->id_clients)}}" >Modifier</a></td>
                        <td><form action="{{route('clients.destroy',$client->id_clients)}}" method="post">
                      @csrf
                          <input type="hidden" name="_method" value="delete" />
                            <button class="btn btn-danger">Supprimer</button>
                        </form></td>

                      </tr>
                    @endforeach
                </table>
</div>
@endsection
