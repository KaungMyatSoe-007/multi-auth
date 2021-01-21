@extends('back.master')
@section('content')
 <div class="container mt-5">
     <div class="row">
         <div class="col-md-12">
             <h5>User List</h5>
             <table class=" table table-bordered table-hover">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Role</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($users as $item)
                     <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            @foreach ($item->roles as $role)
                                <span class=" badge badge-primary">
                                    {{ $role->name }}
                                </span>
                            @endforeach
                        </td>
                        <td>
                            @foreach (Auth::user()->roles as $role)
                            @if ($role->name == 'Manager')
                                <a href="{{url('admin/users/'.$item->id.'/edit')}}"
                                    class="btn btn-sm btn-info">
                                    Manage Role
                                </a>
                            @endif
                            @endforeach
                        </td>
                    </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>
@endsection
