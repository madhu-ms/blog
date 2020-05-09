@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Category</div>
                

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

                       <form action="{{ route('categories.update',$categories->id) }}" method="POST"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            Name:<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $categories->name }}" required autocomplete="name" autofocus/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            <br/> 
                            <input type="submit" class="btn btn-primary" value="Update"/>
                            <input type="button" class="btn btn-danger" onclick="window.location.href='{{ route('categories.index') }}';" value="Cancel"/>
                            <br/>
                            <br/>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
