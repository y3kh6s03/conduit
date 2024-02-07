<nav class="navbar navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">conduit</a>
        <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item">
                <!-- Add "active" class when you're on that page" -->
                <a class="nav-link {{request()->is('/') ? 'active': ''}}" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->is('create') ? 'active': ''}}" href="{{route('conduit.create')}}"> <i class="ion-compose"></i>&nbsp;New Article </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->is('settings') ? 'active': ''}}" href="#"> <i class="ion-gear-a"></i>&nbsp;Settings </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile/eric-simons">
                    <img src="" class="user-pic" />
                    Eric Simons
                </a>
            </li>
        </ul>
    </div>
</nav>