<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" style="overflow: hidden; width: auto; height: 100%;">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li>
                    <a class="has-arrow" href="{{ url('pm') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-th-large"></i><span class="hide-menu">Master</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="email-compose.html">Type Master</a></li>
                        <li><a href="email-read.html">Project Activity Master</a></li>
                        <li><a href="email-inbox.html">Package Master</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="{{ route('projectInitiation') }}" aria-expanded="false"><i class="fa fa-file-text-o"></i><span class="hide-menu">Planning and Investigation</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('projectInitiation') }}">Project Initiation</a></li>
                        <li><a href="chart-morris.html">Prepare Project Additional Details</a></li>
                        <li><a href="chart-chartjs.html">Work Details</a></li>
                        <li><a href="chart-chartist.html">Administrative Sanction Details </a></li>
                        <li><a href="chart-amchart.html">Technical Sanction Details</a></li>
                        <li><a href="chart-echart.html">Surface Water Gauge Discharge Data</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-snowflake-o"></i><span class="hide-menu">Construction of Project</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="ui-alert.html">Construction Material Details</a></li>
                        <li><a href="ui-button.html">Lab Test Record</a></li>
                        <li><a href="ui-dropdown.html">Executed Drawing Details</a></li>
                        <li><a href="ui-tab.html">Project Completion Report</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-line-chart"></i><span class="hide-menu">Milestone Tracking </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="uc-calender.html">Project Progress</a></li>
                        <li><a href="uc-datamap.html">Summary Report</a></li>
                        <li><a href="uc-nestedable.html">Agreement Process Master</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Reports</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="form-basic.html">Work Order Agreement Report</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>