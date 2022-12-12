@extends('layauts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{old('title')}}">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" placeholder="Content">
                {{old('content')}}
            </textarea>
            @error('content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="{{ old('image') }}">
            @error('image')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-floating">
            <h2>Category</h2>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{old('category_id') == $category->id ? 'select' : ''}}
                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-control" id="tags" multiple name="tags[]">
                @foreach($tags as $tag)
                    <option
                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    </form>
@endsection