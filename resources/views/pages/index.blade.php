
@extends('layout.blog')

@section('content')

<a href="{{route('posts.create')}}" class="btn btn-primary">Add New</a>
<br>
<br>
@foreach($posts as $result)

<div class="container">
    <div class="card">
       <div class="card-body">
           <h1>{{$result->title}}</h1>
           <p>{{$result->description}}</p>

           {{-- @foreach ($tag->tags->pluck('name') as $item)
            <a href="#" class="btn btn-success">{{$item}}</a>
           @endforeach --}}
       </div>
       <div class="card-footer">
            <form action="{{route('posts.destroy',$result->id)}}" method="POST" class="float-right">
                @csrf
                @method('delete')
               <a href="{{route('posts.show', $result->id)}}" class="btn btn-success">view</a>
               <a href="{{route('posts.edit', $result->id)}}" class="btn btn-primary">edit</a>
               <button type="submit" class="btn btn-danger">delete</button>
           </form>
       </div>

    </div>
</div>
@endforeach
@endsection