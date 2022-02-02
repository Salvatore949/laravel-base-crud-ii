@extends('layouts.base')
@section('main')

<h3>
    <a href ="{{route('create')}}"> CREATE </a>
</h3>
    <h1>Comic List</h1>
    <ul>
        @foreach($comics as $comic)
        <li>
            <a href="{{ route('show', $comic -> id)}}">
            {{ $comic ->title }}
            <\a>
        
        <a href="#"> EDIT</a>
        </li>
        @endforeach
    </ul>
@endsection