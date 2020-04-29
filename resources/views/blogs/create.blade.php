@extends('layout.header')

@section('content')

<div>
    <h1 class='mt-3 mb-3'>Create your Blog</h1>
    <form action="/store" method="post">
        @csrf
        <div class="form-group">
            <label for="category">Select Category</label>
            <select class="form-control" id="category" name="category">
                <option value="">---select---</option>
                <option>Horror</option>
                <option>Conspiracy</option>
                <option>Politics</option>
                <option>Technology</option>
                <option>Fantacy</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Title of the Blog</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Blog Title">
        </div>   
        <div class="form-group">
            <label for="body">Blog Description</label>
            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
</div>

@endsection
