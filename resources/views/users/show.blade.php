@extends('layouts.app')

@section('content')
<div class="container">

  <a class="btn btn-primary" href="{{route('users.index')}}">User list</a><br>


  Name : {{$user->name}}<br>
  Email : {{$user->email}}
</div>
@endsection
