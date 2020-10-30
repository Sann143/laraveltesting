@extends("layouts.home")
@section("content")
    <div class="row">
        <div id="blog_form" class="col-12">
            <br>
            <br>
            <h1>Create a Blog</h1>
            <form action="{{ route('blogs.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label for="blog_title">Blog Title</label>
                    <input name="title" type="text" class="form-control" id="blog_title" aria-describedby="titleHelp" placeholder="Blog Title" value="{{ old('title')}}">
                    @error('title')
                    <small id="titleHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div><!-- blog_title -->
                <div class="form-group">
                    <label for="blog_body">Blog Body</label>
                    <textarea name="body" class="form-control" id="blog_body" aria-describedby="bodyHelp" rows="15">{{ old('body') }}</textarea>
                    @error('body')
                    <small id="bodyHelp" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div><!-- blog_body -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div><!--Blog Form-->
    </div>
@endsection