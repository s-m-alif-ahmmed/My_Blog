@extends('admin.master')
@section('title')
    Admin Dashboard
@endsection

@section('content')

    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <h1 class="text-center text-muted">Dashboard</h1>
                    <hr/>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-3 m-2">
                            <div class="card">
                                <h3>
                                    <a href="" class="nav-link text-center text-black py-2"><i class="fa fa-users text-danger"></i> Users</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-3 m-2">
                            <div class="card">
                                <h3>
                                    <a href="" class="nav-link text-center text-black py-2"><i class="fa fa-shop text-danger"></i> Blogs</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-3 m-2">
                            <div class="card">
                                <h3>
                                    <a href="" class="nav-link text-center text-black py-2"><i class="fa fa-user text-danger"></i> Admin</a>
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-3 m-2">
                            <div class="card">
                                <h3>
                                    <a href="" class="nav-link text-center text-black py-2"><i class="fa fa-dollar text-danger"></i> Sales</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
