<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TodoAppController extends Controller
{
    protected $validationRules = [
        "content" => "required",
        "email" => "required|email"
    ];


    public function todoapp()
    {

        return view('pages.todoapp')->with("tasks", Task::where("hidden", 0)->get());
    }

    public function store(Request $r, Task $task)
    {
        $validatedData = $r->validate($this->validationRules);

        Task::create($validatedData);

        return redirect()->route("todoapp.welcome");
    }

    public function delete(Task $task)
    {
        $task->delete();

        return redirect()->route("todoapp.welcome");
    }

    public function update(Task $task, Request $r)
    {
        $validatedData = $r->validate($this->validationRules);

        $task->update($validatedData);

        return redirect()->route("todoapp.welcome");
    }

    public function complete(Task $task)
    {
        $task->completed = 1;
        $task->save();

        return redirect()->route("todoapp.welcome");
    }

    public function hide(Task $task)
    {
        $task->hidden = 1;
        $task->save();

        return redirect()->route("todoapp.welcome");
    }
}
