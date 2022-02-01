@extends('layouts.base')
@section('main')
<h1>
    {{$comic -> title}}
</h1>
<h3>
    {{$comic -> author}}
</h3>

<p>
 Data di pubblicazione: {{$comic -> release_date}} <br>
 Numero di pagine: {{$comic -> release_date}}
</p>
@endsection