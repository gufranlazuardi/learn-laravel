<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class PostController extends Controller
{
    public function index()
    {
        $data=[
            "title" => "POST",
            "ajax" => "posts"
        ];
        
        return view("posts/posts", $data);
    }

    public function detail($id)
    {
        $data=[
            "title" => "posts",
            "id" => $id,
            "detail_data" => $this->getDetail($id)
        ];

        // dd($data);
        return view("posts/detail-post", $data);
    }

    public function getDetail($id)
    {
        $client = new Client();

        try {
            $response = $client->request("GET", "https://jsonplaceholder.typicode.com/posts/" . $id, 
            [
                "headers" => [
                    "Accept" => "application/json",
                ]
            ]
        );

        $responseData = json_decode($response->getBody(), true);

        return $responseData;

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = json_decode($e->getResponse()->getBody()->getContents(), true);
            return $response;
        }
    }

}
