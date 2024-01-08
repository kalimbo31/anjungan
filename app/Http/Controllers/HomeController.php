<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::orderBy('created_at', 'desc')
                ->where('published', true)
                ->take(3)->get()
        ]);
    }

    public function show($year, $month, $day, $slug)
    {   
        $post = Post::whereYear('created_at', $year)
        ->whereMonth('created_at', $month)
        ->whereDay('created_at', $day)
        ->where('slug', $slug)
        ->first();

        if(!$post){
            abort(404);
        }

        return view('post.show', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}