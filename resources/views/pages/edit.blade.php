
{{-- @extends('layout.blog')

@section('content')

<a href="{{route('posts.create')}}" class="btn btn-primary">edit Post</a>
<br>
<br>

<form action="{{route('posts.update',$post->id)}}" method="POST">
    @csrf
    @method('put')

    <div class="form-group">
        <input type="text" name="title" id="" class="form-control" value="{{$post->title}}">
    </div>

    <div class="form-group">
        <textarea name="description" id="" cols="30" rows="5" class="form-control">
            {{$post->description}}
        </textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">save post</button>
    </div>
</form>

@endsection --}}


@extends('layout.blog')
@section('content')
<a href="{{route('posts.create')}}" class="btn btn-primary">edit</a>

<form action="{{route('posts.update',$post->id)}}" method="POST">
    @csrf 
    @method('put')
     <div class="form-group">
         <input type="text" name="title" class="from-control" value="{{$post->title}}" >
     </div>
</form>