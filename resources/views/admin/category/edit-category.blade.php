@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h1 class="text-muted">Edit Category</h1>
                        <p class="text-success text-center">{{session('message')}}</p>
                        <hr/>
                        <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Category Name :</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$category->name}}" class="form-control" name="name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Category Description :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" >{{$category->description}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Category Image :</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" />
                                    <img src="{{asset($category->image)}}" alt="" height="100" width="120" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="Update Category" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
