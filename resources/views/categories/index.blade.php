@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categories Overview</div>
                <div class="card-body"><a href="{{ route('categories.create') }}" class="btn btn-info"> Add Category </a></div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @if($categories->count() > 0)
                        @foreach ($categories as $category)
                            <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td><a class="btn  btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                                <form action="{{ route('categories.destroy',$category->id) }}" method="POST" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }} 
                                <input type="submit" value="Delete" class="btn  btn-danger" onclick="return confirm('Are you sure?')" />
                                </form>
                            </td>    
                                
                            </tr>
                        @endforeach
                        @else
                            <tr>
                            <td colspan="3" align="center">Currently there are no categories</td>
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
