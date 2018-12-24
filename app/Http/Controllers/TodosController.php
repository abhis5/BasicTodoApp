<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){

    $todos = Todo::all();

    return view('todos') -> with('todos' , $todos);


    }


    public function store(Request $request){

     

      $todo = new Todo;

      $todo -> todo = $request->todo;
      $todo -> save();

        return redirect() -> back();
    }


    public function delete($id){


       $todo = Todo::find($id);
       $todo->delete();

       return redirect() -> back();


    }
}
