@extends('layout')

@section('form')

<div class="row">
   <div class="col-lg-6 col-lg-offset-3">
      
       <form action="/create/todo" method="post">
         {{ csrf_field() }}
      
       <input type="text" class="form-control input-lg" placeholder="Create a new Todo" name="todo">

       </form>
        
   
   </div>

@stop

@section('content')
 


  <hr>
@foreach($todos as $todo)
                 
                 {{  $todo -> todo  }}
                 <a href="{{ route('todo.delete' , ['id' => $todo->id])}}" class="btn btn-danger">Delete</a >
                     <hr>
                 @endforeach



@stop