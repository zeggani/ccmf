@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('users.store')}}" method="post">
      @csrf
      <div>
        <label>Nom</label>
        <input name="name" class="form-control">
      </div>

      <div>
        <label>Email</label>
        <input name="email" class="form-control">
      </div>

      <div>
        <label>Password</label>
        <input name="password" type="password" class="form-control">
      </div>

      <div>
        <label>Role</label>
        <select name="id_roles" class="form-control">
            @foreach($roles as $role)
            <option value="{{$role->id_roles}}">{{$role->description}}</option>
            @endforeach
        </select>
      </div>

<div>
  <button class="btn btn-danger" type="reset">Annuler</button>
  <button class="btn btn-primary" type="submit">Enregistrer</button>
</div>

    </form>
</div>
@endsection
