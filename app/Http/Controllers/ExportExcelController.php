<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelController extends Controller
{
    function index()
    {
        $task_data = DB::table('tasks')->get();
        return view('export_excel')->with('task_data', $task_data);
    }

    function excel()
    {
        $task_data = DB::table('tasks')->get()->toArray();
        $task_array[] = array('member_name', 'name', 'yesterday', 'todo', 'created_at');
        foreach($task_data as $task)
        {
            $task_array[] = array(
                'member_name'  => $task->member_name,
                'name'   => $task->name,
                'yesterday'    => $task->yesterday,
                'todo'  => $task->todo,
                'created_at'   => $task->created_at
            );
        }
        Excel::create('Daily StandUp', function($excel) use ($task_array){
            $excel->setTitle('Daily StandUp');
            $excel->sheet('Daily StandUp', function($sheet) use ($task_array){
                $sheet->fromArray($task_array, null, 'A1', false, false);
            });
        })->download('xlsx');
    }
}
