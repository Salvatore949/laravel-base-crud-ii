@extends('layouts.base')
@section('main')
   <h1>Inserisci il movie</h1>
 <form action="{{route('store')}}" method="POST">

  @method("POST")
  @csrf

  <label for="title">Title</label><br>
  <input type="text" name="title" ><br>
  <label for="subtitle">Subtitle</label><br>
  <input type="text" name="subtitle"><br>
  <label for="date">Date</label><br>
  <input type="date" name="date"> <br>
  <input type="submit">
</form> 
@endsection