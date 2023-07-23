@extends('admin.master')
@section('title')
    Manage Category
@endsection

@section('content')

    <section class="py-5">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-10 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-muted fw-bold">All Category Info</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <table class="table table-responsive table-bordered table-hover">
                            <thread>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thread>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <img src="{{asset($category->image)}}" alt="" height="60" width="80"/>
                                    </td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        @if($category->status == 1)
                                            <a href="{{route('category-change-status', $category->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Published</a>
                                        @elseif($category->status == 0)
                                            <a href="{{route('category-change-status', $category->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Unpublished</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('category.edit', $category->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{route('category.show', $category->id)}}" class="btn btn-success btn-sm">Detail</a>
                                        <form action="{{route('category.destroy', $category->id)}}" onclick="return confirm('Are you sure to delete this category?')" method="post" class="my-1">
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
