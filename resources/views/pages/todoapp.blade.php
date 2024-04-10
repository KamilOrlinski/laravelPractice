@extends("layouts.app")

@section('title', 'To-Do List')

@section("content")
<h1>To-Do List</h1>
@isset($X)
{{ $x }}
@endisset

<ul>
    @foreach ($tasks as $task)
        <li
        @if ($task->completed == 1)
            style="color: green;"
        @endif
        @if ($task->completed == 0)
            style="color: red;"
        @endif
        >

            <form method="POST" action="{{ route("todoapp.update", $task->id) }}">
                @csrf
                @method("PUT")
                <input type="text" name="content" value="{{ $task->content }}">
                <button type="submit">EDIT</button>
            </form>
            <form method="POST" action="{{ route("todoapp.delete", $task->id) }}">
                @csrf
                @method("DELETE")
                <button type="submit">DELETE</button>
            </form>
            <form method="POST" action="{{ route("todoapp.complete", $task->id) }}">
                @csrf
                @method("PUT")
                <button type="submit">Mark as complete</button>
            </form>
            <form method="POST" action="{{ route("todoapp.hide", $task->id) }}">
                @csrf
                @method("DELETE")
                <button type="submit">Hide</button>
            </form>
        </li>
    @endforeach
</ul>

<form method="POST">
    @csrf
    <div>
        <input type="text" name="content" placeholder="Dodaj element listy to-do" required>
        <input type="submit" value="Add">
    </div>
</form>
@endsection
