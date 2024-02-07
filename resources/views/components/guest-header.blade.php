<nav class="navbar navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">conduit</a>
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item">
                <!-- Add "active" class when you're on that page" -->
                <a class="nav-link {{request()->is('/')?'active':''}}" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->is('login')?'active':''}}" href="{{route('login')}}">Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->is('register')?'active':''}}" href="{{route('register')}}">Sign up</a>
            </li>
        </ul>
    </div>
</nav>
