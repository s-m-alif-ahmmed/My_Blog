@extends('admin.master')
@section('title')
    Manage blog
@endsection

@section('content')

    <section class="py-5">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-muted fw-bold">All blog Info</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <table class="table table-responsive table-bordered table-hover">
                            <thread>
                            <tr>
                                <th>SL</th>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thread>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->category->id}}</td>
                                    <td>{{$blog->category->name}}</td>
                                    <td>{{$blog->blog_title}}</td>
                                    <td>{{$blog->blog_author}}</td>
                                    <td>
                                        <img src="{{asset($blog->blog_image)}}" alt="" height="60" width="80"/>
                                    </td>
                                    <td>
                                        @if($blog->status == 1)
                                            <a href="{{route('blog-change-status', $blog->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Published</a>
                                        @elseif($blog->status == 0)
                                            <a href="{{route('blog-change-status', $blog->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Unpublished</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('blog.edit', $blog->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('blog.show', $blog->id)}}" class="btn btn-success btn-sm">Detail</a>
                                        <form action="{{route('blog.destroy', $blog->id)}}" onclick="return confirm('Are you sure to delete this menu item?')" method="post" class="my-1">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
