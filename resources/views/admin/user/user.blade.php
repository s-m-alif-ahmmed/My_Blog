@extends('admin.master')
@section('title')
    Users
@endsection

@section('content')

        <section class="py-5">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-md-10 mx-auto">
                        <div class="card card-body">
                            <h1 class="text-muted fw-bold">Users</h1>
                            <p class="text-success text-center">{{session('message')}}</p>
                            <hr/>
                            <table class="table table-responsive table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Ban/UnBan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            @if($user->role == 1)
                                                <a href="{{route('change-role',['id' => $user->id])}}" onclick="return confirm('Are you sure to change role?')" class="btn btn-success btn-sm">Admin</a>
                                            @elseif($user->role == 0)
                                                <a href="{{route('change-role',['id' => $user->id])}}" onclick="return confirm('Are you sure to change role?')" class="btn btn-success btn-sm">User</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($user->ban_status == 1)
                                                <a href="{{route('change-ban-status',['id' => $user->id])}}" onclick="return confirm('Are you sure to unban this user?')" class="btn btn-danger btn-sm">Ban</a>
                                            @elseif($user->ban_status == 0)
                                                <a href="{{route('change-ban-status',['id' => $user->id])}}" onclick="return confirm('Are you sure to ban this user?')" class="btn btn-success btn-sm">UnBan</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('users-detail',['id' => $user->id])}}" class="btn btn-success btn-sm">Detail</a>
                                            <a href="{{route('delete-user',['id' => $user->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this.')">Delete</a>
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

