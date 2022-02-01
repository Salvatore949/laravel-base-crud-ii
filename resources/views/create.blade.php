@extends('layouts.base')
@section('main')
   <h1>Inserisci il movie</h1>
 <form action="{{route('store')}}" method="POST">

  @method("POST")
  @csrf

  <label for="title">Title</label><br>
  <input type="text" name="title" ><br>
  <label for="author">Author</label><br>
  <input type="text" name="author"><br>
  <label for="release_date">ReleaseDate</label><br>
  <input type="date" name="release_date"> <br>
  <label for="page">Pages</label><br>
  <input type="number" name="page"> <br>
  <input type="submit">
</form> 
@endsection