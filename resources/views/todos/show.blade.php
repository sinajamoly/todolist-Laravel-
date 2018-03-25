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
    </div>
@endsection