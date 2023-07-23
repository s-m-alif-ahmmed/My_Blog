@extends('admin.master')
@section('title')
    Edit Blog
@endsection
@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-muted fw-bold">Add Blog</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3"> Category :</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{$category->id == $blog->category_id ? 'selected' : ''}}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Title :</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_title" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Author :</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="blog_author" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Blog Image :</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="blog_image" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Short Description :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="short_description" ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Long Description :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="long_description" ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Quote :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="blog_quote" ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Quote Author :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="quote_author" ></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-danger" value="Create New Blog" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
