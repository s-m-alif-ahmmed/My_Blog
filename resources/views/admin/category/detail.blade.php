@extends('admin.master')

@section('title')
    Category Detail
@endsection

@section('content')

    <section class="mt-3 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Category Detail Page</div>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th>Category ID</th>
                                    <td>{{$category->id}}</td>
                                </tr>
                                <tr>
                                    <th>Category Name</th>
                                    <td>{{$category->name}}</td>
                                </tr>
                                <tr>
                                    <th>Category Description</th>
                                    <td>{{$category->description}}</td>
                                </tr>
                                <tr>
                                    <th>Category Image</th>
                                    <td>
                                        <img src="{{asset($category->image)}}" alt="Category Image" height="100" width="100">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Category Status</th>
                                    <td>
                                        @if($category->status == 1)
                                            <a href="{{route('category-change-status', $category->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Published</a>
                                        @elseif($category->status == 0)
                                            <a href="{{route('category-change-status', $category->id)}}" onclick="return confirm('Are you sure to change status?')" class="btn btn-success btn-sm">Unpublished</a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Action</th>
                                    <td>
                                        <form action="{{route('category.destroy', $category->id)}}" onclick="return confirm('Are you sure to delete this category?')" method="post">
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
