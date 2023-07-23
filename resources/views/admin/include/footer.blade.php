<footer class="text-center text-lg-start bg-dark text-white">
    <section class="py-2">
        <div class="container-fluid text-center text-md-start mt-3">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="fw-bold fs-5 mb-4">
                        <i class="fa fa-blog fa-beat me-3 text-danger"></i>My Blog
                        <hr/>
                    </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam architecto assumenda aut autem deserunt expedita libero molestiae neque tempore.</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="fw-bold mb-4">
                        Categories
                    </h6>
                    <hr>
                    <p>
                        <a href="#" class="text-decoration-none">Coding Blog</a>
                    </p>
                    <p>
                        <a href="#" class="text-decoration-none">Celebrity Blog</a>
                    </p>
                    <p>
                        <a href="#" class="text-decoration-none">Economy Blog</a>
                    </p>
                    <p>
                        <a href="#" class="text-decoration-none">Tech Blog</a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="fw-bold mb-4">
                        Useful Links
                    </h6>
                    <hr>
                    <p>
                        <a href="{{route('about')}}" class="text-decoration-none">About</a>
                    </p>
                    <p>
                        <a href="{{route('contact')}}" class="text-decoration-none">Contact</a>
                    </p>
                    @if(isset(Auth::user()->id))
                        <p>
                            <a href="{{route('dashboard')}}" class="text-decoration-none">Dashboard</a>
                        </p>
                        <p>
                            <a href="" class="text-decoration-none" onclick="event.preventDefault(); document.getElementById('logoutForm').submit(); ">Logout</a>
                        </p>
                        <form action="{{route('logout')}}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    @else
                        <p>
                            <a href="{{route('login')}}" class="text-decoration-none">Login</a>
                        </p>
                        <p>
                            <a href="{{route('register')}}" class="text-decoration-none">Register</a>
                        </p>
                    @endif
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="fw-bold mb-4">
                        Contacts
                    </h6>
                    <hr>
                    <p>
                        <i class="fa fa-home me-3 text-secondary"></i>
                        North Badda, Dhaka-1215.
                    </p>
                    <p>
                        <i class="fa fa-envelope me-3 text-secondary"></i>
                        myblog@gmail.com
                    </p>
                    <p>
                        <i class="fa fa-phone me-3 text-secondary"></i>
                        +88 017 *** *** 24
                    </p>
                    <p>
                        <i class="fa fa-phone me-3 text-secondary"></i>
                        +88 018 *** *** 25
                    </p>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <section class="mb-4 text-center">
        <a href="{{route('home')}}" class="btn btn-outline-danger btn-lg text-black m-1"><i class="fab fa-facebook"></i></a>

        <a href="{{route('home')}}" class="btn btn-outline-danger btn-lg text-black m-1"><i class="fab fa-twitter"></i></a>

        <a href="{{route('home')}}" class="btn btn-outline-danger btn-lg text-black m-1"><i class="fab fa-google"></i></a>

        <a href="{{route('home')}}" class="btn btn-outline-danger btn-lg text-black m-1"><i class="fab fa-instagram"></i></a>

        <a href="{{route('home')}}" class="btn btn-outline-danger btn-lg text-black m-1"><i class="fab fa-linkedin"></i></a>

        <a href="{{route('home')}}" class="btn btn-outline-danger btn-lg text-black m-1"><i class="fab fa-github"></i></a>
    </section>

    <div class="text-center bg-black p-4">
        Website Design & Develop by <span class="text-danger fw-bolder"> <i class="fa fa-heart"></i> S M ALIF AHMMED. </span> <i class="fa fa-copyright"></i>Copyright all reserved 2023:
        <a href="{{route('home')}}" class="text-decoration-none">myblog.com</a>
    </div>
</footer>
