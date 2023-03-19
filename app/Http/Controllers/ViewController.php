<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ViewController extends Controller
{
    public function index()
    {
        $post = Post::where('status', 1)
        ->latest()
        ->paginate(50);
        return view('welcome.home', compact('post'));
    }
    public function index1()
    {
        $post = Post::where('status', 1)
        ->where('category', 1)
        ->latest()
        ->paginate(6);
        return view('welcome.politik', compact('post'));
    } 
    public function index2()
    {
        $post = Post::where('status', 1)
        ->where('category', 2)
        ->latest()
        ->paginate(6);
        return view('welcome.ekonomi', compact('post'));
    } 
    public function index3()
    {
        $post = Post::where('status', 1)
        ->where('category', 3)
        ->latest()
        ->paginate(6);
        return view('welcome.sosial', compact('post'));
    } 
    public function index4()
    {
        $post = Post::where('status', 1)
        ->where('category', 4)
        ->latest()
        ->paginate(6);
        return view('welcome.lingk', compact('post'));
    } 
    public function index5()
    {
        $post = Post::where('status', 1)
        ->where('category', 5)
        ->latest()
        ->paginate(6);
        return view('welcome.pendidikan', compact('post'));
    } 
    public function index6()
    {
        $post = Post::where('status', 1)
        ->where('category', 6)
        ->latest()
        ->paginate(6);
        return view('welcome.lain', compact('post'));
    } 
}
