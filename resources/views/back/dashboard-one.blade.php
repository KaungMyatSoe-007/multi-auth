@extends('back.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard One</h1>
                <div class=" lead">
                    Name : {{Auth::user()->name}}<br>
                    Role :
                    @foreach (Auth::user()->roles as $item)
                      <span class=" badge badge-success">{{ $item->name }}</span> &nbsp;
                    @endforeach
                </div><br>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <a href="{{url('admin/users')}}" class="btn btn-primary">User</a>
                    @foreach (Auth::user()->roles as $role)
                        @if ($role->name == 'Manager')
                           <a href="{{url('admin/roles')}}" class="btn btn-primary">Role</a>
                        @endif
                    @endforeach
                    <button class=" btn btn-danger"
                            onclick="return confirm('Are You Sure You want to logout')">
                        Logout
                    </button>
                </form>
                <hr>
                @foreach (Auth::user()->roles as $role)
                    @if ($role->name == 'Supervisor')
                        <a href="{{url('admin/managers')}}" class="btn btn-primary">Dashboard One</a>
                    @endif
                    @if ($role->name == 'Staff')
                        <a href="{{url('admin/staffs')}}" class="btn btn-primary">Dashboard Two</a>
                    @endif
                    @if ($role->name == 'User')
                        <a href="{{url('admin/normal-users')}}" class="btn btn-primary">Dashboard Three</a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
