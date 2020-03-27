@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('tasktracker.qa_dashboard')</div>

                <div class="panel-body">
                    @lang('tasktracker.qa_dashboard_text')
                </div>
            </div>
        </div>
    </div>
@endsection
