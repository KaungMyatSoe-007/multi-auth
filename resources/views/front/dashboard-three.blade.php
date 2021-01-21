@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Three</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class=" lead">
                        Name : {{Auth::user()->name}}<br>
                        Role :
                        @foreach (Auth::user()->roles as $item)
                          <span class=" badge badge-success">{{ $item->name }}</span> &nbsp;
                        @endforeach
                    </div><br>
                </div>
            </div>
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
