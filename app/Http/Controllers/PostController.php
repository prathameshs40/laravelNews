<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index($category=null)
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=fa82755fe740491bb0258fa48f93f24d');
        $posts = $response->json();

        return view('index', ['posts' => $posts]);
    }

}