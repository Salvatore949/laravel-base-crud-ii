<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class HomeController extends Controller
{
  public function home(){

     $comics = Comic::all();

      return view('home', compact('comics'));
  }

  public function show($id){

    $comic = Comic::findOrFail($id);

     return view('show', compact('comic'));
 }

  public function create(){
    return view ('create');
  }

  public function store( Request $request){
   
    $data = $request -> validate([
      'title' => 'required|string|max:60',
      'author' =>'required|string|max:255',
      'release_date' =>'required|date',
      'page' =>'numeric|between:0,300',
    ]);

  $comic = Comic::create($data);
  return redirect() -> route('show', $comic -> id);

  }


}
