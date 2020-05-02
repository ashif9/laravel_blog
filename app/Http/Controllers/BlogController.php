<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\All_blogs;

class BlogController extends Controller
{
    public function index(){
        $blogs = All_blogs::orderBy('id', 'DESC')->get();
        $categories = All_blogs::select('category')->orderBy('category', 'ASC')->groupBy('category')->get();
        
        return view('blogs.index', ['blogs'=>$blogs, 'categories'=>$categories]);
    }
    public function create(){
        return view('blogs.create');
    }
    public function store(){
        // return redirect('/create'); exit;
        $blog = new All_blogs;
        $blog->title = request('title');
        $blog->body = request('body');
        $blog->category = request('category');
        $blog->save();
        return redirect('/blogs');
        // echo $blog;
        // error_log($blog);
    }
    public function edit($id){
        echo $id;
    }
    public function delete($id){
        echo $id;
    }
    public function fullBlog($id){
        $blog = All_blogs::where('id', $id)->get();
        return view('blogs.fullBlog', ['blog'=>$blog[0]]);
    }
}
