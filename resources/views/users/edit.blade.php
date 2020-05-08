@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Users</div>
                

                <div class="card-body">
                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif --}}

                       <form action="{{ route('users.update',$users->id) }}" method="POST"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            Name:<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}" required autocomplete="name" autofocus/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br/>
                            Email:<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required autocomplete="name" autofocus/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br/>
                            Role:
                            <select  name="role_id" class="form-control">
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}" @if($role->id == $users->role_id) selected @endif>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <br/>
                            <br/> 
                            <input type="submit" class="btn btn-primary" value="Update"/>
                            <input type="button" class="btn btn-danger" onclick="window.location.href='{{ route('users.index') }}';" value="Cancel"/>
                            <br/>
                            <br/>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
