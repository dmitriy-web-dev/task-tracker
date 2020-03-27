@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('tasktracker.taskstatus.title')</h3>
    @can('taskstatus_create')
    <p>
        <a href="{{ route('admin.taskstatuses.create') }}" class="btn btn-success">@lang('tasktracker.qa_add_new')</a>

    </p>
    @endcan



    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('tasktracker.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($taskstatuses) > 0 ? 'datatable' : '' }} ">
                <thead>
                    <tr>

                        <th>@lang('tasktracker.taskstatus.fields.name')</th>
                                                <th>&nbsp;</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($taskstatuses) > 0)
                        @foreach ($taskstatuses as $taskstatus)
                            <tr data-entry-id="{{ $taskstatus->id }}">

                                <td field-key='name'>{{ $taskstatus->name }}</td>
                                                                <td>
                                    @can('taskstatus_view')
                                    <a href="{{ route('admin.taskstatuses.show',[$taskstatus->id]) }}" class="btn btn-xs btn-primary">@lang('tasktracker.qa_view')</a>
                                    @endcan
</td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">@lang('tasktracker.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>

    </script>
@endsection
