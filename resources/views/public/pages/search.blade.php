@extends('public.master')

@section('title')
    Search
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

            <div class="blog-area">
                <div class="container">
                    <div class="row">
                        @foreach($searchBlogs as $blog)
                            @if($blog->status == 1)
                                <div class="col-md-6 col-lg-4">
                                    <div class="blog-item">
                                        <div class="blog-item-img">
                                            <img src="{{asset($blog->blog_image)}}" alt="Thumb">
                                        </div>
                                        <div class="blog-item-info">
                                            <div class="blog-item-meta">
                                                <ul>
                                                    <li><a href="#"><i class="far fa-user-circle"></i> By {{$blog->blog_author}}</a></li>
                                                    <li><i class="far fa-calendar-alt"></i> {{$blog->created_at}}</li>
                                                </ul>
                                            </div>
                                            <h4 class="blog-title">
                                                <a href="{{route('user-detail', $blog->id)}}">{{$blog->blog_title}}</a>
                                            </h4>
                                            <a class="blog-btn" href="{{route('user-detail', $blog->id)}}">Read More<i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                            @endif
                        @endforeach
                        @if($searchBlogs->isEmpty())
                            <div class="mb-5">
                                <h5 class="text-danger text-center p-5">No matching result found.</h5>
                            </div>
                        @endif
                            <nav class="nav">
                                <ul class="mx-auto">
                                    {{ $searchBlogs->appends(request()->input())->links('pagination::bootstrap-5') }}
                                </ul>
                            </nav>
                    </div>

                </div>
            </div>

        </main>

    </section>

@endsection
