<nav class="navbar navbar-expand-md navbar-dark">

    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">
            <img src="{{ asset('img/mis-logo.png') }}" alt="{{ config('app.name', 'Laravel') }}" class="logo dark-logo" />
        </a>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <div class="navbar-nav ml-auto" style="    display: block;">
            <div class="md-name">Project Management</div>
            <div>Rat, Admin</div>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>

<nav class="menu navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Master</a>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Planning and Investigation<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('projectInitiation') }}">Project Initiation</a></li>
                <li><a href="#">Prepare Project Additional Details</a></li>
                <li><a href="#">Work Details</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Tender Application</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Resources Management and Milestone Tracking</a>
        </li>
    </ul>
</nav>