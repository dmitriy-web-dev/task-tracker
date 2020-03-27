<?php

namespace App\Http\Controllers\Admin;

use App\TaskStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTaskStatusesRequest;
use App\Http\Requests\Admin\UpdateTaskStatusesRequest;

class TaskStatusesController extends Controller
{
    /**
     * Display a listing of TaskStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('taskstatus_access')) {
            return abort(401);
        }


                $taskstatuses = TaskStatus::all();

        return view('admin.taskstatuses.index', compact('taskstatuses'));
    }

    /**
     * Show the form for creating new TaskStatus.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('taskstatus_create')) {
            return abort(401);
        }
        return view('admin.taskstatuses.create');
    }

    /**
     * Store a newly created TaskStatus in storage.
     *
     * @param  \App\Http\Requests\StoreTaskStatusesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskStatusesRequest $request)
    {
        if (! Gate::allows('taskstatus_create')) {
            return abort(401);
        }
        $taskstatus = TaskStatus::create($request->all());



        return redirect()->route('admin.taskstatuses.index');
    }


    /**
     * Display TaskStatus.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('taskstatus_view')) {
            return abort(401);
        }
        $tasks = \App\Task::where('status_id', $id)->get();

        $taskstatus = TaskStatus::findOrFail($id);

        return view('admin.taskstatuses.show', compact('taskstatus', 'tasks'));
    }

}
