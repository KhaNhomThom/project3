<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Post::all();
        return $categories;
    }
    public function show($id){
        $categories = Post::find($id);
        return $categories;
    }
    public function create(){
        //ข้างในนี้ไม่มีอะไร
    }
    public function store(){
        //ข้างในนี้ไม่มีอะไร
    }
    public function edit($id){
        //ข้างในนี้ไม่มีอะไร
    }
    public function update($id){
        //ข้างในนี้ไม่มีอะไร
    }
}
