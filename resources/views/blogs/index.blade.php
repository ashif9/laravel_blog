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
                <a href="#" class="btn btn-primary float-right">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-md-3 col-lg-3">
        <h1>All Categories</h1>
        <div class="card text-white bg-info mb-3">
            <div class="card-header">Category</div>
            <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <ul class="list-group">
                    @foreach($blogs as $key => $blog)
                        <li class="list-group-item" style="color:black">{{ $blog->category->unique() }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection