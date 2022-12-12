@extends('layauts.main')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label" >Title</label>
            <input type="text" class="form-control" value="{{$post->title}}" name="title" id="title" placeholder="Title">

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="Content">{{$post->content}}</textarea>

        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" name="image" value="{{$post->image}}" id="image" placeholder="Image">

        </div>
        <div class="form-floating">
            <h2>Category</h2>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="category_id">
                @foreach($categories as $category)
                    <option

                        {{ $category->id === $post->category->id ? 'selected' : ''}}

                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <select class="form-control" id="tags" multiple name="tags[]">
                    @foreach($tags as $tag)
                        <option

                            @foreach($post->tags as $postTag)
                                {{ $tag->id === $postTag->id ? 'selected' : ''}}
                            @endforeach
                            value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    </form>
@endsection
