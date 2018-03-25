@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-default">Go Back</a>
    <h1>{{$todo->text}}</h1>
    <div class="card m-2 p-2">

        <div class="card-body">
            <p>{{$todo->body}}</p>
            <div class="border-bottom" >
                <span class="text-muted text-sm-right">
                    {{$todo->due}}
                </span>
            </div>
        </div>
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">edit</a>
        {!! Form::open(['action'=>['TodosController@destroy',$todo->id],'method'=>'DELETE']) !!}
            {{Form::submit('DELETE',['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    </div>
@endsection