@extends('admin.master')
@section('title')
    Blog Detail
@endsection

@section('content')

    <section class="mt-3 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Blog Detail Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Category ID</th>
                                    <td>{{$blog->category->id}}</td>
                                </tr>
                                <tr>
                                    <th>Category Name</th>
                                    <td>{{$blog->category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Id</th>
                                    <td>{{$blog->id}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Title</th>
                                    <td>{{$blog->blog_title}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Author</th>
                                    <td>{{$blog->blog_author}}</td>
                                </tr>
                                <tr>
                                    <th>Short Description</th>
                                    <td>{{$blog->short_description}}</td>
                                </tr>
                                <tr>
                                    <th>Long Description</th>
                                    <td>{{$blog->long_description}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Quote</th>
                                    <td>{{$blog->blog_quote}}</td>
                                </tr>
                                <tr>
                                    <th>Quote Author</th>
                                    <td>{{$blog->quote_author}}</td>
                                </tr>
                                <tr>
                                    <th>Blog Image</th>
                                    <td>
                                        <img src="{{asset($blog->image)}}" alt=" Blog Image" height="100" width="100">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Blog Status</th>
                                    <td>
                                        @if($blog->status == 1)
                                            <a href="{{route('blog-change-status', $blog->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Published</a>
                                        @elseif($blog->status == 0)
                                            <a href="{{route('blog-change-status', $blog->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Unpublished</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <form action="{{route('blog.destroy', $blog->id)}}" onclick="return confirm('Are you sure to delete this blog?')" method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

