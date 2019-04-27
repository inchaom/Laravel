{{-- @extends('layout.blog')
@section('content')



<a href="{{route('posts.create')}}" class="btn btn-primary">create New Post</a>
<br>
<br>

<form action="{{route('posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="title" id="" class="form-control" placeholder="Title">
    </div>

    <div class="form-group">
        <textarea name="description" id="" cols="30" rows="5" class="form-control"  placeholder="description">
               
        </textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">save post</button>
    </div>

</form>
@endsection --}}



@extends('layout.blog')
@section('content')

<div class="container"><br>
<a href="{{route('posts.create')}}" class="btn btn-primary">create post</a>


<form action="{{route('posts.store')}}" method="POST">
    @csrf 
    <div class="form-group"><br>
        <input type="text" name="title" id="" class="form-control" placeholder="Title">
    </div>

    <div class="form-group">
        <textarea name="description" id="article-ckeditor" cols="30" rows="5" class="form-control" placeholder="description"></textarea>
    </div>

    <div class="form-check">
        @foreach ($tag as $item)
            <input type="checkbox" value{{$item->id}} name="check[]"><label for="">{{$item->name}}</label>
        @endforeach
    </div>
    

    <div class="form-group">
        <button type="submit" class="btn btn-success">save post</button>
    </div>
</form>
</div>

