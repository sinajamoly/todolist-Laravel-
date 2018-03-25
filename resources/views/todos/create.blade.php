@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action'=>'TodosController@store','method'=>'POST']) !!}
        <div class="div">
            {{Form::label('text', 'Text', ['class' => 'awesome'])}}
            {{Form::text('text', '')}}
        </div>
        {{--<div class="">--}}
            {{--{{Form::label('email', 'E-Mail Address', ['class' => 'awesome'])}}--}}
            {{--{{Form::text('email', '',['placeholder'=>'example@gmail.com'])}}--}}
        {{--</div>--}}
        <div class="">
            {{Form::label('due', 'Due', ['class' => 'awesome'])}}
            {{Form::date('due', \Carbon\Carbon::now())}}
        </div>
        <div class="">
            {{Form::label('body', 'Due', ['class' => 'awesome'])}}
            {{Form::textarea('body', '')}}
        </div>
        {{Form::submit('Click Me',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection