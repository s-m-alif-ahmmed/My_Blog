<nav class="navbar navbar-expand-md navbar-dark bg-dark py-1">
    <div class="container-fluid">
        <a href="{{route('home')}}" class="navbar-brand fs-4 ms-5"><i class="fa fa-blog fa-beat text-danger pe-2"></i>My Blog</a>
        <form action="{{route('search')}}" role="search" method="GET" class="d-flex">
            @csrf
            <div class="input-group">
                <input type="search" name="search" value="{{ Request::GET('search')}}" id="search" class="form-control" />
                <button class="btn btn-outline-danger">
                    <i class="fa fa-search text-white"></i>
                </button>
            </div>
        </form>
        <ul class="navbar-nav">
            <li>
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}" class="nav-link">About</a>
            </li>
            <li>
                <a href="{{route('contact')}}" class="nav-link">Contact</a>
            </li>
            @if(isset(Auth::user()->id))
                <li class="dropdown me-5">
                    <a href="" data-bs-toggle="dropdown" class="nav-link dropdown-toggle">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu bg-dark">
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


