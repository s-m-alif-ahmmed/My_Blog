@extends('public.master')

@section('title')
    Detail
@endsection
@section('content')

    <section class="">

        <main class="main">

            <div class="site-breadcrumb">
                <div class="hero-shape-area">
                </div>
                <div class="container">
                    <h2 class="breadcrumb-title">Blog Single</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Blog Single</li>
                    </ul>
                </div>
            </div>


            <div class="blog-single-area pb-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-single-wrapper">
                                <div class="blog-single-content">
                                    <div class="blog-thumb-img">
                                        <img src="{{asset($blog->blog_image)}}" alt="thumb" style="height: 350px;">
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-meta">
                                            <div class="blog-meta-left">
                                                <ul>
                                                    <li><i class="far fa-user"></i><a href="#">{{$blog->blog_author}}</a></li>
                                                    <li><i class="far fa-comments"></i>3.2k Comments</li>
                                                    <li><i class="far fa-thumbs-up"></i>1.4k Like</li>
                                                </ul>
                                            </div>
                                            <div class="blog-meta-right">
                                                <a href="#" class="share-btn"><i class="far fa-share-alt"></i>Share</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3 class="blog-details-title mb-20">{{$blog->blog_title}}</h3>
                                            <p class="mb-10">{{$blog->short_description}}</p>
                                            <blockquote class="blockqoute">
                                                {{$blog->blog_quote}}
                                                <h6 class="blockqoute-author">{{$blog->quote_author}}</h6>
                                            </blockquote>
                                            <p class="mb-20">{{$blog->long_description}}</p>

                                            <hr class="blog-single-hr">
                                            <div class="blog-details-tags pb-20">
                                                <h5>Tags : </h5>
                                                <ul>
                                                    <li><a href="#">Design</a></li>
                                                </ul>
                                            </div>
                                        </div>
{{--                                        <div class="blog-author">--}}
{{--                                            <div class="blog-author-img">--}}
{{--                                                <img src="assets/img/blog/author.jpg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="author-info">--}}
{{--                                                <h6>Author</h6>--}}
{{--                                                <h3 class="author-name">Roger D Duque</h3>--}}
{{--                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout that it has a more less.</p>--}}
{{--                                                <div class="author-social">--}}
{{--                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                                                    <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                                                    <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                                                    <a href="#"><i class="fab fa-whatsapp"></i></a>--}}
{{--                                                    <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="blog-comments">
                                        <h3>Comments (20)</h3>
                                        <div class="blog-comments-wrapper">
                                            <div class="blog-comments-single">
                                                <img src="assets/img/blog/com-1.jpg" alt="thumb">
                                                <div class="blog-comments-content">
                                                    <h5>Jesse Sinkler</h5>
                                                    <span><i class="far fa-clock"></i> 20 August, 2022</span>
                                                    <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                    <a href="#"><i class="far fa-reply"></i> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-comments-form">
                                            <h3>Leave A Comment</h3>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Your Name*">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Your Email*">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
                                                        </div>
                                                        <button type="submit" class="theme-btn"><i class="far fa-paper-plane"></i> Post Comment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="sidebar">

                                <div class="widget category">
                                    <h5 class="widget-title">Category</h5>
                                    <div class="category-list">
                                        @foreach($categories as $category)
                                            <a href="" value="{{ $category->id }}" {{$category->blog_id == $category->id ? 'selected' : ''}}><i class="fa fa-angle-double-right"></i>{{ $category->name }}<span>(10)</span></a>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="widget recent-post">
                                    <h5 class="widget-title">Recent Post</h5>
                                    <div class="recent-post-single">
                                        <div class="recent-post-img">
                                            <img src="assets/img/blog/bs-1.jpg" alt="thumb">
                                        </div>
                                        <div class="recent-post-bio">
                                            <h6><a href="#">It is a long established fact that a reader</a></h6>
                                            <span><i class="far fa-clock"></i>{{date('d,m,y')}}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget social-share">
                                    <h5 class="widget-title">Follow Us</h5>
                                    <div class="social-share-link">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>

                            </aside>
                        </div>
                    </div>
                </div>
            </div>

        </main>

    </section>

@endsection

