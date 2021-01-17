@extends('back.master')
@section('content')
 <div class="container mt-5">
     <div class="row">
         <div class="col-md-12">
             <h5>Role List</h5>
             <table class=" table table-bordered table-hover">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>Name</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($roles as $item)
                     <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                    </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>
@endsection
