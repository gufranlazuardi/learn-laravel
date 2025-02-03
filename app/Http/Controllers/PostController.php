<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data=[
            "ajax" => "posts"
        ];
        
        return view("posts/posts", $data);
    }

    public function detail($id)
    {
        $data=[
            "title" => "posts",
            "id" => $id
        ];

        // dd($data);
        return view("posts/detail-post", $data);
    }
}
