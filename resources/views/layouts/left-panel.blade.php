@section('left-panel')
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/dashboard') }}"><i class="icon-speedometer"></i> Dashboard</a>
            </li>
            <li class="divader"></li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/dashboard/message') }}"><i class="icon-calculator"></i> Messages <span class="badge badge-danger">NEW</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/dashboard/comments') }}"><i class="icon-speech"></i> Comments <span class="badge badge-warning">NEW</span></a>
            </li> --}}
            @section('left-menu')
            @show

            <li class="nav-title">
                Business Elements
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> <span class="badge badge-success">NEW</span>Leads</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/dashboard/manageleads') }}"><i class="icon-people"></i> Magage Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/leads') }}"><i class="icon-people"></i> Lists Of Leads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/leads/create') }}"><i class="icon-people"></i> Add Leads</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-graduation-cap"></i> Students</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/students') }}"><i class="fa fa-graduation-cap"></i> Lists Of Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/add-student') }}"><i class="fa fa-graduation-cap"></i> Add Student</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-building-o"></i> Projects</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/projects') }}"><i class="fa fa-building-o"></i> Lists Of Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/add-project') }}"><i class="fa fa-building-o"></i> Add Project</a>
                    </li>
                </ul>
            </li>

            <li class="divider"></li>
            <li class="nav-title">
                HR Depertment
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-building-o"></i> Business</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/business') }}"><i class="fa fa-building-o"></i> Lists Of Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/add-business') }}"><i class="fa fa-building-o"></i> Add Business</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-support"></i> Stuffs</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff/sallers') }}"><i class="icon-support"></i>Sallers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff/designers') }}"><i class="icon-support"></i>Designers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff/writers') }}"><i class="icon-support"></i>Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff/developers') }}"><i class="icon-support"></i>Developers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff/teachers') }}"><i class="icon-support"></i>Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff/managers') }}"><i class="icon-support"></i>Managers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff') }}"><i class="icon-support"></i>List of Stuff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/stuff/addstuff') }}"><i class="icon-support"></i> Add Stuff</a>
                    </li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="nav-title">
                Extras
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-cogs"></i> Settings</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/pages') }}"><i class="icon-star"></i> Lists Of Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/add-page') }}"><i class="fa fa-file-image-o"></i> Add Setting</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-users"></i> Users</a>
                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/users') }}"><i class="fa fa-users"></i> Lists Of Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/users/create') }}"><i class="fa fa-user"></i> Add Users</a>
                    </li>
                </ul>
            </li>

            <li class="nav-title ">
                <strong>Office Desk</strong> 0.0.1 BETA
            </li>
        </ul>
    </nav>
</div>
@endsection
