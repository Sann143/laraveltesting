@extends("layouts.home")
@section("content")
        <div class="row">
            <div id="header" class="col-12">
                <h1>My Blog</h1>
                <a href="{{ route('blogs.create') }}" class="btn btn-primary">create blog</a>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        <button class="btn btn-success">View</button>
                                        <button class="btn btn-primary">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                {{ $blogs->links() }}
            </div>
        </div>
@endsection
    