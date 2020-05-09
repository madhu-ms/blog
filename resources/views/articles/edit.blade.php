@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Article</div>
                

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
                        
                       <form action="{{ route('articles.update',$articles->id) }}" method="POST"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            Name:<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $articles->name }}" required autocomplete="name" autofocus/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <br/>
                            Description:<textarea  id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $articles->description }}" required autocomplete="description" autofocus >{{ $articles->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <br/>
                            Category:
                            <select  name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if($category->id == $articles->category_id) selected @endif>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <br/>
                            <input type="hidden"  name="user_id" value="{{ $articles->user_id }}"/>
                            <br/> 
                            <input type="submit" class="btn btn-primary" value="Save"/>
                            <input type="button" class="btn btn-danger" onclick="window.location.href='{{ route('articles.index') }}';" value="Cancel"/>
                            <br/>
                            <br/>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
