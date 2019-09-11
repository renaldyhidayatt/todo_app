@extends('layouts.app')

@section('title')
    Single todos| {{ $todos->name }}
@endsection
@section('content')
<h1 class="text-center my-5">
        {{ $todos->name }}
</h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Detail
            </div>
            <div class="card-body">
                    {{ $todos->description }}
            </div>
            <a href="/todos/{{ $todos->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
        <a href="/todos/{{ $todos->id }}/delete" class="btn btn-danger my-2">Delete</a>
        </div>
    </div>
</div>
@endsection
