@extends('layouts.app')

@section('content')
    <h1>Todos</h1>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
            <div class="card m-2 p-2">
                <div class="card-title card-header text-light bg-primary">
                    <h3>{{$todo->text}}</h3>
                </div>
                <div class="card-body">
                    <span class="label label-primary text-muted">
                        {{$todo->due}}
                    </span>
                    <div class="divider">

                    </div>
                    <a href="todo/{{$todo->id}}" class="btn btn-primary btn-sm">
                        Detail
                    </a>
                </div>
            </div>
        @endforeach
    @endif
@endsection