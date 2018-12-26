@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <hr>

                    <form action="/create/todo" method="post">
                      {{ csrf_field() }}

                    <input type="text" class="form-control input-lg" placeholder="Create a new Todo" name="todo">
Your Todos! <br>
                    </form>
                    @foreach(Auth::user() ->Todos as $todo)


                    {{  $todo -> todo  }}
                    <a href="{{ route('todo.delete' , ['id' => $todo->id])}}" class="btn btn-danger">Delete</a>
                    <a href="{{ route('todo.update' , ['id' => $todo->id])}}" class="btn btn-info btn-xs">Edit</a >

                   @if(!$todo -> completed)
                   <a href="{{ route('todos.completed' ,['id' => $todo->id] ) }}" class="btn btn-xs btn-success"> Mark as Completed </a>

                   @else
                     <span class="text-success"> Completed</span>

                   @endif


                        <hr>

                  @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
