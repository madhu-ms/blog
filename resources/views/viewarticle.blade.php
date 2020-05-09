@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$articles->name}}</div>
                <div class="card-body">
                <p>Category : {{$articles->category->name}} &nbsp; 
                   User: {{$articles->user->name}} &nbsp
                   Published Date: {{$articles->created_at}}</p>
                <p>{{$articles->description}}</p>

                <a href="{{ route('home')}}">BACK</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
