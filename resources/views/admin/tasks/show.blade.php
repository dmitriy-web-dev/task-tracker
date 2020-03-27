@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('tasktracker.task.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('tasktracker.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('tasktracker.task.fields.title')</th>
                            <td field-key='title'>{{ $task->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('tasktracker.task.fields.description')</th>
                            <td field-key='description'>{{ $task->description }}</td>
                        </tr>
                        <tr>
                            <th>@lang('tasktracker.task.fields.status')</th>
                            <td field-key='status'>{{ $task->status->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('tasktracker.task.fields.assigned-to')</th>
                            <td field-key='assigned_to'>{{ $task->assigned_to->name ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.tasks.index') }}" class="btn btn-default">@lang('tasktracker.qa_back_to_list')</a>
        </div>
    </div>
@stop


