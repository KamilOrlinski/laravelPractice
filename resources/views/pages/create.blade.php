@extends('layouts.app')

@section('title', 'Dodaj nową stronę')
    
@section('content')
<form action="/pages" method="POST">
    @csrf
    <div class="form-group">
        <label for="">Tytuł</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="">Alias</label>
        <input type="text" class="form-control" name="slug">
    </div>
    <div class="form-group">
        <label for="">Treść</label>
        <textarea name="content" class="form-control"></textarea>
    </div>
    <button class="btn btn-primary">Dodaj</button>
</form>

@endsection