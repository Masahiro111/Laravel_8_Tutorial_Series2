<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response = Http::get('');
        return $response->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('');
        return $post->json();
    }

    public function addPost()
    {
        $post = Http::post('');
        return  $post->json();
    }

    public function updatePost()
    {
        $response = Http::put('');

        return $response->json();
    }

    public function deletePost()
    {
        $response = Http::delete('');
        return $response->json();
    }
}
