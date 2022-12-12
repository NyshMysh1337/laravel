@extends('layauts.main')
@section('content')
    <div>
        <a href="{{ route('post.create') }}">Create post</a>
    </div>
    @foreach($posts as $post)
        <div><a href="{{ route('post.show', $post->id) }}">{{$post->id}}. {{$post->title}}</a></div>
    @endforeach
@endsection
