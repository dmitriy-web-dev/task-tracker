@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">



            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('tasktracker.qa_dashboard')</span>
                </a>
            </li>

            @can('task_access')
            <li>
                <a href="{{ route('admin.tasks.index') }}">
                    <i class="fa fa-tasks"></i>
                    <span>@lang('tasktracker.task.title')</span>
                </a>
            </li>@endcan

            @can('taskstatus_access')
            <li>
                <a href="{{ route('admin.taskstatuses.index') }}">
                    <i class="fa fa-gears"></i>
                    <span>@lang('tasktracker.taskstatus.title')</span>
                </a>
            </li>@endcan

            @can('user_management_access')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>@lang('tasktracker.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('role_access')
                    <li>
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('tasktracker.roles.title')</span>
                        </a>
                    </li>@endcan

                    @can('user_access')
                    <li>
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span>@lang('tasktracker.users.title')</span>
                        </a>
                    </li>@endcan

                </ul>
            </li>@endcan








            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('tasktracker.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('tasktracker.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

