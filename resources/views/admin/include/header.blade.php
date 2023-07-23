<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="{{route('dashboard')}}" class="navbar-brand ms-5"><i class="fa fa-blog fa-beat text-danger pe-2"></i>My Blog</a>
        <ul class="navbar-nav">
            @if(isset(Auth::user()->id))
                <li class="dropdown me-5">
                    <a href="" data-bs-toggle="dropdown" class="nav-link dropdown-toggle">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu bg-dark">
                        <li>
                            <a href="{{route('home')}}" class="dropdown-item text-danger">Home</a>
                        </li>
                        <li>
                            <a href="{{route('dashboard')}}" class="dropdown-item text-danger">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('profile.show')}}" class="dropdown-item text-danger">Settings</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item text-danger" onclick="event.preventDefault(); document.getElementById('logoutForm').submit(); ">Log Out</a>
                        </li>
                        <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                            @csrf
                        </form>

                    </ul>
                </li>
            @else
                <li>
                    <a href="{{route('login')}}" class="nav-link text-white">Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="nav-link text-white">Register</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
