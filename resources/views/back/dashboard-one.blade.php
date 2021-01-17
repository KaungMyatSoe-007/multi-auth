@extends('back.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard One</h1>
                <a href="{{url('admin/users')}}" class="btn btn-primary">User</a>
                <a href="{{url('admin/roles')}}" class="btn btn-primary">Role</a>
            </div>
        </div>
    </div>
@endsection
