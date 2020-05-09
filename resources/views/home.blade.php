@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      @if($articles->count() > 0)
        @foreach($articles as $articles)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{$articles->name}}</div>
                    <div class="card-body">
                    <p>Category : {{$articles->category->name}} &nbsp; 
                   User: {{$articles->user->name}} &nbsp
                   Published Date: {{$articles->created_at}}</p>
                    {{ substr($articles->description, 0, 500) }}
                    <a href="{{ route('viewarticle',$articles->id) }}">Read more..</a>
                    </div>
                </div>
            </div>
        @endforeach
      @endif
    </div>
</div>
@endsection
