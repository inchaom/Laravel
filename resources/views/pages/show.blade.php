

@extends('layout.blog')
<div class="container">
        @section('content')
        <a href="{{route('posts.create')}}" class="btn btn-primry">back</a>
        <div class="card">
            <div class="card-body">
                <h1>{{$post->title}}</h1>
                <p>{{$post->description}}</p>
    
            </div>
            <div class="card-footer">
                <p>post date: {{$post->created_at}}</p>
            </div>
          
        </div>
       
    
    @endsection
</div>

