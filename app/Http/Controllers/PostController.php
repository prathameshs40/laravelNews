<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index($category="business")
    {
        $cat=["business","entertainment","general","healths","cience","sports","technology"];
        $response = Http::get("https://newsapi.org/v2/top-headlines?country=us&category=$category&apiKey=fa82755fe740491bb0258fa48f93f24d");
        $posts = $response->json();

        return view('index', ['posts' => $posts ,'cat'=>$cat]);
    }

}