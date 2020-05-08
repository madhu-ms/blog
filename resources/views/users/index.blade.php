@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users Overview</div>
                <div class="card-body"><a href="{{ route('users.create') }}" class="btn btn-info"> Add User </a></div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @if($users->count() > 0)
                        @foreach ($users as $user)
                            <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->name}}</td>
                            <td><a class="btn  btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }} 
                                <input type="submit" value="Delete" class="btn  btn-danger" onclick="return confirm('Are you sure?')" />
                                </form>
                            </td>    
                                
                            </tr>
                        @endforeach
                        @else
                            <tr>
                            <td colspan="3" align="center"></td>
                           </tr>
                        @endif
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
