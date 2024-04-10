@extends('layouts.app')

@section('title', 'Moje strony')
    
@section('content')
@foreach ($pages as $page)
    <h1>{{ $page->title }}<br></h1>
@endforeach
@endsection