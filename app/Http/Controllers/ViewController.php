<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

        $pol = Post::where('status', 1)
        ->latest()
        ->paginate(50);
        return view('welcome.politik', compact('post', 'pol'));
    } 
    public function index2()
    {
        $post = Post::where('status', 1)
        ->where('category', 2)
        ->latest()
        ->paginate(6);

        $eko = Post::where('status', 1)
        ->latest()
        ->paginate(50);
        return view('welcome.ekonomi', compact('post', 'eko'));
    } 
    public function index3()
    {
        $post = Post::where('status', 1)
        ->where('category', 3)
        ->latest()
        ->paginate(6);

        $sos = Post::where('status', 1)
        ->latest()
        ->paginate(50);
        return view('welcome.sosial', compact('post', 'sos'));
    } 
    public function index4()
    {
        $post = Post::where('status', 1)
        ->where('category', 4)
        ->latest()
        ->paginate(6);

        $lingk = Post::where('status', 1)
        ->latest()
        ->paginate(50);
        return view('welcome.lingk', compact('post', 'lingk'));
    } 
    public function index5()
    {
        $post = Post::where('status', 1)
        ->where('category', 5)
        ->latest()
        ->paginate(6);

        $pend = Post::where('status', 1)
        ->latest()
        ->paginate(50);
        return view('welcome.pendidikan', compact('post', 'pend'));
    } 
    public function index6()
    {
        $post = Post::where('status', 1)
        ->where('category', 6)
        ->latest()
        ->paginate(6);

        $lain = Post::where('status', 1)
        ->latest()
        ->paginate(50);
        return view('welcome.lain', compact('post', 'lain'));
    } 
    public function latest(){
        $latests = Post::where('status', 1)
        ->latest()
        ->paginate(5);

        
        return view('welcome.home', compact('latests'));
    }
    
    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $post = Post::where('title', 'LIKE', '%'.$search_text.'%')
        ->orWhere('content', 'LIKE', '%'.$search_text.'%')
        ->latest()->paginate(6);
        $post->appends($request->all());

        $latests = Post::where('status', 1)
        ->latest()
        ->paginate(5);
        return view('welcome.search', compact('post', 'latests'));
    }
}
