@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Articles Overview</div>
                <div class="card-body"><a href="{{ route('articles.create') }}" class="btn btn-info"> Add Article </a></div>
                

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
                                <th>Description</th>
                                <th>Category</th>
                                <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @if($articles->count() > 0)
                        @foreach ($articles as $article)
                            <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->name }}</td>
                            <td>{{ substr($article->description, 0, 50) }}</td>
                            <td>{{ $article->category->name }}</td>
                            <td>{{ $article->user->name }}</td>
                            <td>
                                <a class="btn  btn-info" href="{{ route('articles.show',$article->id) }}">View</a>
                                <a class="btn  btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                                <form action="{{ route('articles.destroy',$article->id) }}" method="POST" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }} 
                                <input type="submit" value="Delete" class="btn  btn-danger" onclick="return confirm('Are you sure?')" />
                                </form>
                            </td>    
                                
                            </tr>
                        @endforeach
                        @else
                            <tr>
                            <td colspan="6" align="center">Currently there are no Articles</td>
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
