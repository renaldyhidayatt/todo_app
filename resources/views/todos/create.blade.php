@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5"></h1>
    <div class="row justify-content-center">
        <div class="card card-default">
            <div class="card-header">Create New Todo</div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/store-todos" method="post">
                    @csrf
                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" name="name" class="form-control" placeholder="Todo" size="12" required>
                    </div>
                    @csrf
                    <div class="md-form">
                        <i class="fas fa-user prefix"></i>
                        <textarea name="description" class="form-control md-textarea" length="120" rows="3" placeholder="description" required></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Create Todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
