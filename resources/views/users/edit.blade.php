@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('users.update',$user->id_users)}}" method="post">
      @csrf
      <input type="hidden" name="_method" value="put" />
      <input type="hidden" name="id_users" value="{{$user->id_users}}" />

      <div>
        <label>Nom</label>
        <input name="name" value="{{$user->name}}" class="form-control">
      </div>

      <div>
        <label>Email</label>
        <input name="email" value="{{$user->email}}" class="form-control">
      </div>

      <div>
        <label>Password</label>
        <input name="password" type="password" class="form-control">
      </div>

      <div>
        <label>Role</label>
        <select name="id_roles" class="form-control">
            @foreach($roles as $role)
            <option @if($user->id_roles== $role->id_roles) selected @endif value="{{$role->id_roles}}">{{$role->description}}</option>
            @endforeach
        </select>
      </div>

      <div>
        <button class="btn btn-danger" type="reset">Annuler</button>
        <button class="btn btn-primary" type="submit">Modifier</button>
      </div>

    </form>
</div>
@endsection
