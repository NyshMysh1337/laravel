@extends('layauts.main')
@section('content')
        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}}</div>
        <div>
            <a href="{{ route('post.edit', $post->id) }}">Update</a>
        </div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
             <div>
                 <input type="submit" value="Delete"/>
             </div>
        </form>
    <div>
        <a href="{{ route('post.index') }}">Back</a>
    </div>
@endsection
