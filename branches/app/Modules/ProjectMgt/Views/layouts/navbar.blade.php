<style>
    .navbar{
        padding: 0;
    }
    .navbar-nav{
        flex-direction: row;
    }
    #navbarNavDropdown .navbar-nav li{
        padding: 1px 8px;
        border-right: 1px solid #5690a2;
    }
    .page-wrapper{
        margin-left: 0 !important;
    }
    .navbar-nav .dropdown-menu{
        position: absolute;
    }

    .navbar-brand span{
        display: inherit !important;
    }
    .mega-dropdown, .sidebartoggler {
        display: none;
    }
</style>
<nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background: #74c8e2">
{{--    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>--}}

    <div class="navbar-collapse collapse show" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Type Master</a>
                    <a class="dropdown-item" href="#">Project Activity Master</a>
                    <a class="dropdown-item" href="#">Package Master</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projectInitiation') }}">Planning and Investigation</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Reports
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Work Order Agreement Report</a>
                </div>
            </li>
        </ul>
    </div>
</nav>