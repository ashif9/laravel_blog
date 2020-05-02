@extends('layout.header')
@section('content')

<div class="row">
    <div class='col-md-9 col-lg-9'>
        <h1>All Blogs</h1>
        @foreach($blogs as $key => $blog)
        <div class="card mb-4">
            <h5 class="card-header">Blog No. {{$key+1}}</h5>
            <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{{ Str::limit($blog->body, 200) }}</p>
                <a href="/blogs/{{$blog->id}}" class="btn btn-primary float-right">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-3 col-lg-3">
        <h1>All Categories</h1>
        <div class="card mb-3">
            <div class="card-header">Category</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($categories as $key => $category)
                        <li class="list-group-item1 m-2" style="color:black; list-style-type:none">{{ $category->category }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection