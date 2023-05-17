@extends('layouts.app')
@section('content') <div class="container"> <div class="row"> <div class="col-md-8 offset-md-2"> <h1>Create New Post</h1>
Code snippet
       <form action="{{ route('posts.store') }}" method="post">
            @csrf


            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" rows="5">{{ old('body') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Post</button>
            </div>
        </form>
    </div>
</div>

</div> @endsection
