<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                </li>
                <li class="{{ Request::routeIs('admin.patient.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.patient.index') }}"><i class="menu-icon fa fa-heartbeat"></i>Patient List</a>
                </li>
                <li class="{{ Request::routeIs('admin.room.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.room.index') }}"><i class="menu-icon fa fa-bed"></i>Detail Rooms</a>
                </li>
                <li class="{{ Request::routeIs('admin.inpatient.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.inpatient.index') }}"><i class="menu-icon fa fa-heart"></i>Inpatient List</a>
                </li>
                <li class="{{ Request::routeIs('admin.health-record.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.health-record.index') }}"><i class="menu-icon fa fa-medkit"></i>Health records</a>
                </li>
                <li class="{{ Request::routeIs('admin.hospital-cost.index') ? 'active' : '' }}">
                    <a href="{{ route('admin.hospital-cost.index') }}"><i class="menu-icon fa fa-stethoscope"></i>Hospital Cost</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
