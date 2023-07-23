@extends('public.master')

@section('title')
    Home
@endsection
@section('content')

    <section class="">

        <main class="main">

        <div class="site-breadcrumb">
            <div class="hero-shape-area">
            </div>
            <div class="container">
                <h2 class="breadcrumb-title">Our Blogs</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Blogs</li>
                </ul>
                <hr/>
            </div>
        </div>

        <div class="">
            <div class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                        @if($blog->status == 1)
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="{{asset($blog->blog_image)}}" alt="Thumb" height="250px">
                                    </div>
                                    <div class="card-body ">
                                        <div class="blog-item-meta text-muted">
                                            <ul>
                                                <li><a href="#"><i class="far fa-user-circle"></i> By {{$blog->blog_author}}</a></li>
                                                <li><i class="far fa-calendar-alt"></i> {{date('y-m-d')}}</li>
                                            </ul>
                                        </div>
                                        <h4 class="blog-title">
                                            <a href="{{route('user-detail', $blog->id)}}">{{$blog->blog_title}}</a>
                                        </h4>
                                        <a class="blog-btn" href="{{route('user-detail', $blog->id)}}">Read More<i class="fa fa-arrow-right px-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach
                </div>

            </div>
        </div>

        </main>

    </section>

@endsection
