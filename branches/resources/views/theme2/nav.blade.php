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
