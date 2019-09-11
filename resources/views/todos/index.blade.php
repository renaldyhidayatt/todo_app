@extends('layouts.app')
@section('title')
    Todo list
@endsection
@section('content')
<h1 class="text-center my-5">Todo App Page</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-card-default">
                <div class="card-header">
                    Todos
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $p)
                                <li class="list-group-item">{{ $p->name }}
                                    @if(!$p->completed)
                                        <a href="/todos/{{ $p->id }}/complete" style="color: white;" class="btn btn-warning btn-sm float-right">Completed</a>
                                    @endif
                                    <a href="/todos/{{ $p->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                                </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
