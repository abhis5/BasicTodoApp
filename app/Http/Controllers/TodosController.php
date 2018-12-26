<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Todo;
use App\User;
use App\Auth;

class TodosController extends Controller
{
    public function index(){


    $todos = Todo::orderBy('updated_at', 'desc')->get();

    return view('todos') -> with('todos' , $todos);


    }


    public function store(Request $request){
     $todo = new Todo();
    #  $todo -> user_id = Session::put('user_id', Auth::user()->id);
      $todo -> todo = $request-> input('todo');
      $todo -> user_id = auth() -> user() -> id;


      $todo -> save();
  return redirect() -> back();
    }


    public function delete($id){


       $todo = Todo::find($id);
       $todo->delete();

       return redirect() -> back();


    }

   public function update($id){

    $todo = Todo::find($id);


    return view('update') -> with('todo', $todo);

   }

   public function save (Request $request, $id){

      $todo = Todo::find($id);

      $todo-> todo = $request -> todo;

      $todo-> save();

      return redirect() -> route('home') ;

}

public function completed($id){

  $todo= Todo::find($id);

   $todo -> completed = 1 ;
   $todo -> save();
  return redirect() -> back();
}






}
