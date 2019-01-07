

@extends('layouts.app')

@section('content')
<div class="container">

  <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <input type="file" name="file" accept=".xlsx, .xls, .csv" />
      <br /><br />
      <input type="submit" value=" Save " />
  </form>


</div>
@endsection
