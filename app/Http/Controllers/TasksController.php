<?php

namespace App\Http\Controllers;

use App\Exports\TasksExport;
use App\Models\Task;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class TasksController extends Controller
{

    public function show() {
        return view('tasks.show', [
            'tasks' => Task::all()
        ]);
    }

    public function create() {
        return view('create_task');
    }

    public function store(){


        $attributes = request()->validate([
            'member_name' => 'required|max:255',
            'name' => 'required|max:255',
            'yesterday' => 'required|max:255',
            'todo' => 'required|max:255'
        ]);

        Task::create($attributes);

        return redirect('/showtask');
    }
    public function export()
    {
        return Excel::download(new TasksExport(), 'ds_tasks.xlsx');
    }

}
