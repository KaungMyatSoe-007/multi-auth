@extends('back.master')
@section('content')
 <div class="container mt-5">
     <div class="row">
         <div class="col-md-6 offset-md-3">
            <h6>User</h6>
            <form action="{{url('admin/users/'.$user->id.'/update')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$user->name}}">
                </div><br>
                <h6>Role</h6>
                <div class="form-group">
                    @foreach ($roles as $item)
                        <input type="checkbox"
                                name="role_ids[]"
                                value="{{$item->id}}"
                                id="{{$item->id}}"
                                @foreach ($user->roles as $role)
                                    @if ($role->name == $item->name)
                                        checked
                                    @endif
                                @endforeach
                        >

                        <label for="{{$item->id}}">{{$item->name}}</label>
                        &nbsp; &nbsp; &nbsp;
                    @endforeach
                </div>
                <br>
                <button class="btn btn-primary">Add Role</button>
            </form>
         </div>
     </div>
 </div>
@endsection
