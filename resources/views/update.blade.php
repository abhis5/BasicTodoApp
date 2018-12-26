@extends('layout')

@section('form')


<head>
  <style>




  input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('icon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;

  }

  input[type=text]:focus {
    width: 100%;
  }
</style>
</head>

<div class="row">
   <div class="col-lg-12">

       <form action="{{ route('todo.save' , ['id' => $todo->id])}}" method="post">
         {{ csrf_field() }}

       <input  type="text" class="form-control input-lg "  value="{{ $todo -> todo }} "  placeholder="Create a new Todo" name="todo">

       </form>


   </div>

@stop
