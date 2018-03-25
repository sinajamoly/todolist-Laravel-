@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action'=>['TodosController@update',$todo->id],'method'=>'PUT']) !!}
    <div class="div">
        {{Form::label('text', 'Text', ['class' => 'awesome'])}}
        {{Form::text('text', $todo->text)}}
    </div>
    <div class="">
        {{Form::label('due', 'Due', ['class' => 'awesome'])}}
        {{Form::date('due', \Carbon\Carbon::parse($todo->due))}}
    </div>
    <div class="">
        {{Form::label('body', 'Body', ['class' => 'awesome'])}}
        {{Form::textarea('body', $todo->body)}}
    </div>
    {{Form::submit('Edit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection