@extends('layouts.app')

@section('content')

<div class="container">
                <table class="table table-hover">
                  <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>email</td>
                    <td>edit</td>
                    <td>delete</td>
                    <td><a class="btn btn" style="background:#38c172;color:white;" href="{{route('users.create')}}">Nouveau utilisateur</a></td>
                  </tr>
                    @foreach($users as $user)
                      <tr>
                        <td>{{$user->id_users}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a class="btn btn" style="background:#38c172;color:white;" href="{{route('users.edit',$user->id_users)}}" >Modifier</a></td>
                        <td><form action="{{route('users.destroy',$user->id_users)}}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="delete" />
                          <button class="btn btn-danger">Supprimer</button>
                        </form></td>

                      </tr>
                    @endforeach
                </table>
</div>
@endsection
